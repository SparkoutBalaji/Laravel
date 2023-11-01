<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CustomAuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function registration(){
        return view('auth.registration');
    }
    public function registering_user(UserRequest $request)
    {
        $validated = $request->validated();

        $name = $validated['name'];
        $email = $validated['email'];
        $password = Hash::make($validated['password']); // Use Hash::make to hash the password.

        $user = new User;
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->save();

        return 'Success'; // You can change this to a redirect or a response as needed.
    }
}
