<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function showProfile()
    {
        $user = Auth::user(); // Get the currently authenticated user
        return view('profile', compact('user'));
    }
}
