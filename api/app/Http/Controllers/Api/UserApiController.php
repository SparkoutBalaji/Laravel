<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    public function index(){
        $user = User::all();
        return $user;
    }
    public function show(Request $request){
        $user = User::find($request->id);
        dd($user);
        return $user;
    }
    public function update(Request $request){

        $user = User::find($request->id);
        //dd($user);
        $user->name = $request->input('name', $user->name);
        $user->age = $request->input('age', $user->age);
        $user->email = $request->input('email', $user->email);
        $user->phone = $request->input('phone', $user->phone);
        $user->save();
        return response()->json(
            $user
        );
    }
    public function store(Request $request){
        $user = User::create($request->all());
        return response()->json(
            $user
        );
    }
    public function destroy(Request $request){
        $user = User::find($request->id);
        //dd($user);
        $user->delete();
        return response()->json(
            "$request->id - deleted"
        );
    }
}
