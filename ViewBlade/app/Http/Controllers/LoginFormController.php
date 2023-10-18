<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class LoginFormController extends Controller
{
    public function login(Request $req){
        return $req->input();
    }
}
