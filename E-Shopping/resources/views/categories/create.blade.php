@extends('adminLayout.adminframe')
@section('title','Create Category')
@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Category</h1>
    </div>
<h4>New Category</h4>
<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <div class="form-control">
            <label for="name">Name</label> <br>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
    </div>
    <div class="form-control">
        <label for="status">Status</label> <br>
        <select name="status" id="status" class="form-control">
            <option value="0">Inactive</option>
            <option value="1">Active</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success form-control">Create</button>
</form>
</main>
@endsection
