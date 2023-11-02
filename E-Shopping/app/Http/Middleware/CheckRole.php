<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Redirect;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check()) {
            $userRole = auth()->user()->role;

            if ($userRole == 1) {
                // Admin role
                return view('admin.dashboard'); // Admin dashboard view
            } elseif ($userRole == 2) {
                // Regular user role
                return view('home'); // E-shopping home page view
            }
            else {
                return back()->with('fail','un authenticated');
            }
    }
}
}
