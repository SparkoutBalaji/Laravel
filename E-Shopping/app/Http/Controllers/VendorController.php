<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Http\Requests\VendorRequest;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Mime\Part\File;
use Illuminate\Validation\Rule;
use Illuminate\Database\Eloquent\Model;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $vendors = Vendor::latest()->paginate(5);
        return view('vendor.index',compact('vendors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vendor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VendorRequest $request)
    {
        //dd($request->all());
        $data = $request->validated();

        if ($request->hasFile('profile_picture')) {
            $uploadedFile = $request->file('profile_picture');
            $imageName = uniqid().'.'.$uploadedFile->extension();
            $data['profile_picture'] = $imageName;
            $request->profile_picture->move(public_path('profile_pictures'),$data['profile_picture']);
            //dd($path);
        }

    $vendor = Vendor::create($data);

    return redirect()->route('vendors.index')->with('success', 'Creating a New Vendor Successfully');
    }




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $vendor = Vendor::find($id);
        return view('vendor.show',compact('vendor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $vendor = Vendor::find($id);
        return view('vendor.edit',compact('vendor'));
    }



public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', Rule::unique('vendors', 'email')->ignore($id)],
            'password' => 'required|string|min:8', // Adjust the minimum length as needed
            'shop_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'postal_code' => 'required|numeric',
    ]);

    $vendor = Vendor::find($id);

    if ($request->hasFile('profile_picture')) {
        // Handle profile picture update and validation
        $data = $request->validate([
            'profile_picture' => 'image|mimes:png,jpg,jpeg|between:100,15000',
        ]);

        $uploadedFile = $request->file('profile_picture');
        $imageName = uniqid().'.'.$uploadedFile->extension();
        $data['profile_picture'] = $imageName;
        $request->profile_picture->move(public_path('profile_pictures'),$data['profile_picture']);

        $request->request->remove('profile_picture');
    }

    // Update other vendor information (excluding 'profile_picture')
    $vendor->update($request->all());

    return redirect()->route('vendors.index')
        ->with('success', 'Vendor updated successfully');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Vendor::findOrFail($id)->delete();
        return 'Vendor deleted';
    }
}
