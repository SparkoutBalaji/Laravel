@extends('vendorLayout.vendorframe')

@section('content')
<div class="col-lg-12 margin-tb">
    <div class="pull-left">
        <h2>Edit Vendor</h2>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('vendors.index') }}"> Back</a>
    </div>
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
                <img src="{{ asset('storage/' . $vendor->profile_picture) }}" alt="Current Profile Picture" class="mb-2" style="max-width: 200px;">
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
@endsection
