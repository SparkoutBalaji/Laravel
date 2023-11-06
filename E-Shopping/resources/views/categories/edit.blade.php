@extends('adminLayout.adminframe')
@section('title','Edit Category')
@section('content')
<h4>Edit Existing Category</h4>
<form action="{{ route('categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ $category->name }}" required>
    </div>
    <div>
        <label for="status">Status</label>
        <select name="status" id="status" required>
            <option value="0" {{ $category->status ? '' : 'selected' }}>Inactive</option>
            <option value="1" {{ $category->status ? 'selected' : '' }}>Active</option>
        </select>
    </div>
    <button type="submit">Update</button>
</form>
@endsection
