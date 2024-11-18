<?php

// app/Http/Middleware/CheckAdminRole.php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAdminRole
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated and has the correct role
        if (auth()->check() && in_array(auth()->user()->role, ['admin', 'superadmin'])) {
            return $next($request);
        }

        return redirect()->route('home');
    }
}
