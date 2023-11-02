<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $role = Auth::user()->role;
            if ($role == '1') {
                return redirect()->route('admin.adminpanel')->with('success', 'Logged in as an Admin');
            } elseif ($role == '2') {
                return redirect()->route('homepage')->with('success', 'Logged in as a User');
            }
        } else {
            return back()->with('fail', 'No authentication!');
        }
    }
}


// if (Auth::check()) {
//     $userRole = Auth::user()->role;

//     if ($userRole == '1') { //1 is a admin
//         // Admin role
//         return redirect()->route('admin.adminpanel')->with('success', 'Logged in as an Admin');
//     } elseif ($userRole == '2') { //2 is a user
//         // Regular user role
//         return redirect()->route('user.homepage')->with('success', 'Logged in as a User');
//     } else {
//         return redirect()->back()->with('fail', 'Unauthenticated');
//     }
// }
// abort(401);
