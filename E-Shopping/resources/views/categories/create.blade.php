@extends('adminLayout.adminframe')
@section('title','Create Category')
@section('content')
<h4>New Category</h4>
<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="status">Status</label>
        <select name="status" id="status">
            <option value="0">Inactive</option>
            <option value="1">Active</option>
        </select>
    </div>
    <button type="submit">Create</button>
</form>
@endsection
