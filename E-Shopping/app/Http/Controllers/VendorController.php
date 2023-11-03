<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Http\Requests\VendorRequest;
use Illuminate\Support\Facades\Hash;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vendors = Vendor::latest()->paginate(5);
        $vendors = Vendor::all();
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
        $data = $request->all();

        // Check if a file was uploaded for profile_picture
        if ($request->hasFile('profile_picture')) {
            // Get the uploaded file
            $uploadedFile = $request->file('profile_picture');

            // Generate a unique filename and store the file in a designated storage directory
            $filename = uniqid() . '_' . $uploadedFile->getClientOriginalName();
            $path = $uploadedFile->storeAs('profile_pictures', $filename, 'public'); // Assuming you're using the 'public' disk

            // Save the file path in the $data array
            $data['profile_picture'] = $path;
        }

        // Create the vendor with the updated $data array
        $vendor = Vendor::create($data);

        // Redirect to a success page or do other actions as needed
        // You can also add a success message and redirect back to the form
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Vendor::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('vendor.edit',['id'=>$id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VendorRequest $request, string $id)
    {
        $vendor = Vendor::findOrFail($id);
        $vendor->update($request->all());
        return 'updated';
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
