<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\User;

class AuthenticatedMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated
        if (!auth()->check()) {
            // If not authenticated, check for role in query string (default to 'admin')
            $role = $request->query('role', 'admin');
            
            // Map roles to specific user emails
            $roleEmails = [
                'admin' => 'admin@gmail.com',
                'doctor' => 'doctor@gmail.com',
                'nurse' => 'nurse@gmail.com',
                'pharmacist' => 'pharmacist@gmail.com',
                'patient' => 'patient@gmail.com',
            ];

            // If the role is valid, try to login the user
            if (isset($roleEmails[$role])) {
                $user = User::where('email', $roleEmails[$role])->first();

                if ($user) {
                    // Set user as authenticated without requiring a password
                    Auth::setUser($user);
                } else {
                    // Log an error if the user is not found
                    Log::error("User with email {$roleEmails[$role]} not found for role: {$role}");
                    return response()->json(['message' => 'User not found'], 404);
                }
            }

            // If still not authenticated, return Unauthorized response
            if (!auth()->check()) {
                return response()->json(['message' => 'Unauthorized'], 401);
            }
        }

        return $next($request);
    }
}
