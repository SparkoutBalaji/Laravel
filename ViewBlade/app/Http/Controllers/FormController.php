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
            'name'=>'required|regex:/^[A-Za-z\s]+$/|min:3|max:15',      //  /^[ ]+$/ regular expression syntax
            'email'=>['required','email'],              //with [] & without [] are same
            'date_of_birth'=>'required|date|regex:/^\d{4}-\d{2}-\d{2}+$/',  //\d{4} for year 4 digit-\d{2} for month 2 -\d{2} for date 2 digit
            'phone'=>'required|numeric|min:10',
            'profileImage'=>['required','mimes:jpeg,png,jpg','min:60','max:15360'], //dimensions have min_width,max_width,min_height,max_height
            'message'=>'required'
        ]);
    }
}
