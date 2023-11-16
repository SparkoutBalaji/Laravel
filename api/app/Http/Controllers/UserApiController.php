<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserApiController extends Controller
{
    public function users(){
        $user = User::all();
        return $user;
    }
}
