<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomController extends Controller
{
    public function __invoke()
    {
        return "Return From Custom Controller Invoke";
    }
    public function basic()
    {
        return "Return From Custom Controller Basic";
    }
    public function wel()
    {
        return "WELCOME";
    }

}
