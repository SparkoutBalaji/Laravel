<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RequestValidation;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.registration');
    }
    public function registering_user(RequestValidation $request)
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
        if($user->save()){
        return redirect()->route('login')->with('success','Registered Successfully.!');
        } else {
            return back()->with('fail','Something Went Wrong.! Try again later..!');
        }
    }

    public function authenticate(RequestValidation $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (auth()->user()->role == 1) {
                return redirect()->route('admin.dashboard');
            } elseif (auth()->user()->role == 2) {
                return redirect()->route('user.dashboard');
            }
        }

        return redirect()->back()->with('error', 'Invalid credentials');
    }

    public function authentication(RequestValidation $request){
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
