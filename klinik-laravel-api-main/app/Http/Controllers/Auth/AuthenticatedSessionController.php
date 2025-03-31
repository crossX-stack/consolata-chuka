<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function store(Request $request)
    {
        abort(403, 'Login is disabled');
    }

    public function destroy(Request $request): Response
    {
        abort(403, 'Logout is disabled');
    }
}
