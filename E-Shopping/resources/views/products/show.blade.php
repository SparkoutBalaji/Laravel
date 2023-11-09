@extends('vendorLayout.vendorframe')
@section('title','Show Product')
@section('content')
<style>
    img{
        width: 500px;
        height: 350px;
    }
    .table.table-bordered {
        width: 100%;
    }
    </style>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Show Product</h1>
    </div>
    <div class="text-right float-right">
        <a class="btn btn-success" href="{{ route('products.index') }}"> Back</a>
    </div>
<div>

<table class="table table-bordered">
    <tr>
        <th>Id</th>
        <td>{{ $product->id }}</td>
    </tr>
    <tr>
        <th>Name</th>
        <td>{{ $product->name }}</td>
    </tr>
    <tr>
        <th>Description</th>
        <td>{{ $product->description }}</td>
    </tr>
    <tr>
        <th>Price</th>
        <td>{{ $product->price }}</td>
    </tr>
    <tr>
        <th>Status</th>
        <td>{{ $product->status ? 'Active' : 'Inactive' }}</td>
    </tr>
</table>

<form action="{{ route('products.destroy',$product->id) }}" method="POST">

    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}"> Edit</a>

    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger">Delete</button>
</form>
@endsection


