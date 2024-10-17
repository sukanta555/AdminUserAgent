<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import the Auth facade
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // Check if the user has the 'admin' role
            if (Auth::user()->is_admin === 'admin') {
                return $next($request);
            }
            // Redirect if the user is not an admin
            return redirect('/')->with('error', 'You do not have admin access.');
        }

        // Redirect if the user is not logged in
        return redirect('/login')->with('error', 'Please login to access this page.');
    }
}
