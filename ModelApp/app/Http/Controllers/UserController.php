<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::get();
        foreach($user as $user)
        {
            echo "ID : $user->id <br/>";
            echo "NAME : $user->name <br/>";
            echo "ROLE : $user->role <br/>";
            echo "EMAIl : $user->email <br/>";
            echo "ROLE : ".Hash::make($user->password)."<br/><br/><br/>";
        }

        //return User::all();   //view all records as a json format
        //echo User::find(111); //find is default selector for id
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = new User;
        $user->id = 113;
        $user->name = 'SHEIK DAWOODU';
        $user->email = 'sheikdawoodu@gmail.com';
        $user->password = 'Sheik@Sparkout';
        $user->save();                      //for save(insert/create) the data values to the table
        echo $user;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $user = User::where('id',111)->get();
        echo $user;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
