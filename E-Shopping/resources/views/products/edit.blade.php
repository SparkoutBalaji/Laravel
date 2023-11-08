@extends('vendorLayout.vendorframe')
@section('title','Edit Product')
@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Product</h1>
    </div>

    <form action="{{ route('products.update',$product) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <label for="name">Name</label> <br>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name',$product->name) }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <label for="description">Description</label> <br>
            <textarea name="description" id="description" class="form-control" cols="20" rows="10">{{ old('description',$product->description) }}</textarea>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <label for="price">Price</label> <br>
            <input type="text" name="price" id="price" class="form-control" value="{{ old('price',$product->price) }}">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <label for="status">Status</label> <br>
            <select name="status" id="status" class="form-control" value="{{ old('status',$product->status) }}">
                <option value="0">Inactive</option>
                <option value="1">Active</option>
            </select>
        </div> <br>
        <button class="btn btn-success" type="submit">Update</button>
    </form>
</div>
</main>
@endsection
