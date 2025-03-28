<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Offer;
use App\Models\Order;
use Stripe\StripeClient;
use App\Mail\OrderPaymentSuccess;
use Illuminate\Http\Request;
use App\Models\OrderNotification;
use App\Events\OrderNotifications;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;

class PaymentController extends Controller
{
    /**
     * Create a checkout session for an order
     */
    public function orderCheckout(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'offerId' => 'required|integer|exists:offers,id',
            'quantity' => 'required|integer',
            'fullName' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'nationalCardID' => 'required|string|max:500'
        ]);

        $offer = Offer::find($validatedData['offerId']);
        if (!$offer) {
            return response()->json([
                'status' => 'error',
                'message' => 'Offer not found.'
            ], 404);
        }

        try {
            $stripe = new StripeClient(env('STRIPE_SECRET_KEY'));
            $checkoutSession = $stripe->checkout->sessions->create([
                'line_items' => [[
                    'price_data' => [
                        'currency' => 'KES',
                        'product_data' => ['name' => $offer->name],
                        'unit_amount' => $offer->total_with_tax * 100,
                    ],
                    'quantity' => $validatedData['quantity'],
                ]],
                'mode' => 'payment',
                'success_url' => config('app.frontend_url') . '/checkout/success?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => config('app.frontend_url') . '/checkout/cancel',
            ]);

            $order = new Order();
            $order->order_id = uniqid() . mt_rand(100000, 999999);
            $order->status = 'unpaid';
            $order->total_price = $offer->total_with_tax;
            $order->session_id = $checkoutSession->id;
            $order->user_id = Auth::id();
            $order->offer_id = $validatedData['offerId'];
            $order->full_name = $validatedData['fullName'];
            $order->gender = $validatedData['gender'];
            $order->national_card_id = $validatedData['nationalCardID'];
            $order->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Checkout session created successfully.',
                'checkout_url' => $checkoutSession->url,
                'order' => $order
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Error creating checkout session: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Handle successful payment notification
     */
    public function success(Request $request)
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET_KEY'));
        $sessionId = $request->get('sessionId');

        try {
            $session = $stripe->checkout->sessions->retrieve($sessionId);

            if (!$session) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Session not found.'
                ], 404);
            }
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => 'Error retrieving session.'
            ], 500);
        }

        $order = Order::where('session_id', $session->id)->first();
        if (!$order) {
            return response()->json([
                'status' => 'error',
                'message' => 'Order not found.'
            ], 404);
        }

        if ($order->status === 'paid') {
            return response()->json([
                'status' => 'success',
                'message' => 'Payment successful.',
                'order' => $order
            ]);
        }

        $order->status = 'paid';
        $order->save();

        if (auth()->user()) {
            Mail::to(auth()->user()->email)->send(new OrderPaymentSuccess($order));
        }

        $userId = auth()->id();
        $cacheKey = "count_orders_patient_{$userId}";
        if (Cache::has($cacheKey)) {
            Cache::forget($cacheKey);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Payment successful.',
            'order' => $order
        ]);
    }
}
