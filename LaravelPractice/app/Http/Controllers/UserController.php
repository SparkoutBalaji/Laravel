<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return view('users.index',['user'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|numeric',
            'name' => 'required|min:3|max:30',
            'email_id' => 'required|email'
        ]);

        $id = $request->input('id');
        $name = $request->input('name');
        $email_id = $request->input('email_id');

        $user = new User;
        $user->id = $id;
        $user->name = $name;
        $user->email_id = $email_id;
        $user->save();
        return "Stored Successfully";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        return view('users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = new User;
        $request->validate([
            'name' => 'required',
            'email_id' => 'required|email|unique:users,email,' . $user->id,
        ]);

        $name = $request->input('name');
        $email_id = $request->input('email_id');

        User::update();

        return redirect()->route('users.index')
            ->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
