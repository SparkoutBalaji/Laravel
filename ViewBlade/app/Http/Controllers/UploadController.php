<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $r){
        return $r->file('upload')->store('Uploaded Images');        //Stored on storage - app - Uploaded Images folder inside the uploaded image
    }
}
