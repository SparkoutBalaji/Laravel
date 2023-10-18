@extends('layout.frame')
@section('title','UPLOAD FILE')
@section('content')
    <h1>File Uploading</h1>
    <form action="/upload" method="post" enctype="multipart/form-data">
        @csrf
    <label for="upload">Upload Image
        <input type="file" name="upload" id="upload" accept="image/*">
    </label>
    <button type="submit">SUBMIT</button>
</form>
@endsection

