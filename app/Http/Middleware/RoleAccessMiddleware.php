<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleAccessMiddleware
{
    public function handle($request, Closure $next, $role)
    {
        $user = Auth::user();

        if (!$user) {
            return redirect('/auth/redirect')->with('message', 'Please login first.');
        }

        if ($role === 'admin' && $user->role_id !== 1) {
            return redirect('/')->with('message', 'Access denied.');
        }

        if ($role === 'user' && !in_array($user->role_id, [1, 2])) {
            return redirect('/')->with('message', 'Access denied.');
        }

        return $next($request);
    }
}
