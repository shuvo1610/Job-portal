<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserType
{
    public function handle(Request $request, Closure $next, $userType)
    {
        $user = Auth::user();

        if ($user && $user->user_type === $userType) {
            return $next($request);
        }

        return redirect('/login')->with('error', 'Unauthorized access');
    }
}
