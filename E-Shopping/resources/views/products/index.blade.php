@extends('adminLayout.adminframe')
@section('title','Categories')
@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Products</h1>
    </div>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Category</a>
        </div>
    </div>
</div>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>ID</th>
            <th>Name</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categorys as $category)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td>{{ $category->status ? 'Active' : 'Inactive' }}</td>
            <td>
                <a href="{{ route('categories.edit', $category->id) }}">Edit</a>
                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach

    </tbody>
</table>
@endsection
