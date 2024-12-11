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
            return redirect()->route('google.login')->with('message', 'Please login first.');
        }

        // Izinkan admin (role_id 1) untuk mengakses dashboard user
        if ($role === 'user' && !in_array($user->role_id, [1, 2])) {
            return redirect()->route('user.dashboard')->with('message', 'Access denied.');
        }

        if ($role === 'admin' && $user->role_id !== 1) {
            return redirect()->route('admin.dashboard')->with('message', 'Access denied.');
        }

        return $next($request);
    }
}
