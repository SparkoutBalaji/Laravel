<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use Illuminate\Validation\Rules\Password;

class LoginFormController extends Controller
{
    public function login(Request $req){
        $req->validate([
            'email' => ['required','email'],
            'password' => ['required',Password::min(8)->mixedcase()->numbers()->symbols()]
        ],[
            'email.email' => 'Email Must have @gmail/@yahoo/@yandex likes this',
        ]);
        return $req->input();
    }
}
