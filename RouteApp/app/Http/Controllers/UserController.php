<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function get(Request $request)
    {
        dd($request->all());
    }

    public function post(Request $request)
    {
        dd($request->all());

    }

    public function put(Request $request)
    {
        dd($request->all());

    }

    public function patch(Request $request)
    {
        dd($request->all());
    }

    public function delete(Request $request)
    {
        dd($request->all());

    }
}
