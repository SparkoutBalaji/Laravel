<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        return view('form');
    }
    public function store(Request $request){
        //dd($request->all());

        $request->validate([
            'name'=>'required|min:3|max:15',
            'email'=>'required|email',
            'phone'=>'required|min:10',
            'profileImage'=>'required|mimes:jpeg,png,jpg',
            'message'=>'required'
        ]);
    }
}
