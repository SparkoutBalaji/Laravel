<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RequestValidation;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\CheckRole;
use Illuminate\Support\Facades\Session;
use App\Models\Vendor;

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

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $userRole = Auth::user()->role;

            if ($userRole == '1') {
                return redirect()->route('admin.adminpanel')->with('success', 'Logged in as an Admin');
            } elseif ($userRole == '2') {
                return redirect()->route('homepage')->with('success', 'Logged in as a User');
            }
        } else {
            // Authentication failed
            return back()->with('fail', 'Invalid credentials');
        }
    }

    public function vendorAuthenticate(Request $request){

        $email = $request->input('email');
        $password = $request->input('password');
        $vendor = Vendor::where('email', $email)->first();

        if ($vendor) {
            if ($password == $vendor->password) {
                return view('vendor.dashboard',compact('vendor'));
            } else {
                return back()->with('fail', 'Invalid credentials');
            }
        } else {
            return back()->with('fail', 'Vendor not found');
        }
    }






    public function admin(){
        return view('admin.dashboard');
    }
    public function vendorLogin(){
        return view('vendor.login');
    }
    public function user(){
        return view('index');
    }
    public function logout(){
        Session::flush();

        Auth::logout();

        return Redirect('login');
    }
}
