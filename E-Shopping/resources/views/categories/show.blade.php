@extends('adminLayout.adminframe')
@section('title','Categories')
@section('content')
<div>
    <p>ID: {{ $category->id }}</p>
    <p>Name: {{ $category->name }}</p>
    <p>Status: {{ $category->status ? 'Active' : 'Inactive' }}</p>
</div>
<div>
    <a href="{{ route('categories.index') }}">Back to Index</a>
    <a href="{{ route('categories.edit', $category->id) }}">Edit</a>
</div>
@endsection
