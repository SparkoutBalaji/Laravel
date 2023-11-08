@extends('adminLayout.adminframe')
@section('title','Edit the Vendor')
@section('content')
<style>
    img{
        width:500px;
        height: 350px;
    }
</style>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit the Vendor</h1>
    </div>
    <div class="text-right float-right">
        <a class="btn btn-success" href="{{ route('vendors.index') }}"> Back</a>
    </div>
<div>
    <form action="{{ route('vendors.update',$vendor->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ old('name',$vendor->name) }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" value="{{ old('email',$vendor->email) }}" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Password:</strong>
                    <input type="password" name="password" value="{{ old('password',$vendor->password) }}" class="form-control" placeholder="Password">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Shop Name:</strong>
                    <input type="text" name="shop_name" value="{{ old('shop_name',$vendor->shop_name) }}" class="form-control" placeholder="Shop Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address:</strong>
                    <input type="text" name="address" value="{{ old('address',$vendor->address) }}" class="form-control" placeholder="Address">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>City:</strong>
                    <input type="text" name="city" value="{{ old('city',$vendor->city) }}" class="form-control" placeholder="City">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Postal Code:</strong>
                    <input type="text" name="postal_code" value="{{ old('postal_code',$vendor->postal_code) }}" class="form-control" placeholder="Postal Code">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Profile Picture:</strong>
                    @if ($vendor->profile_picture)
                        <td><img src="{{ asset('profile_pictures/'.$vendor->profile_picture) }}" alt="Profile Picture"></td>
                        <br>
                        <label for="profile_picture">Update Profile Picture:</label>
                    @endif
                    <input type="file" name="profile_picture" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

        </form>
</div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@endsection
