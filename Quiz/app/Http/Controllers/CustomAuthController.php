<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CustomAuthController extends Controller
{
    public function login(){
        return view('login');
    }
    public function registration(){
        return view('registration');
    }
    public function register_user(Request $request){
        $request->validate([
            'name'=>'required|min:3|max:30',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8|max:25|confirmed',
            'password_confirmation'=>'required|same:password'
        ]);
        $name = $request->input('name');
        $email = $request->input('email');
        $password = hash::make($request->input('password'));


        $user = new User;
        $user->name=$name;
        $user->email = $email;
        $user->password = $password;
        $user->save();
        if($user){
        return back()->with('success','Register Successfully...!');}
        else{ return back()->with('fail','Something Went Wrong.!');}
        //return redirect(route('login'))->with('Success');
    }
    public function authentication(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8|max:25'
        ]);
        $user = User::where('email','=',$request->email)->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('loginId',$user->id);
                if($request->email == 'admin@admin.com'){
                    return redirect(route('admin.panel'));
                }else{
                    return redirect(route('q.a'));
                }
            }else{
                return back()->with('fail','Password not matched.! try again...');
            }
        }else{
            return back()->with('fail','Password is not registered.!');
        }

    }
}
