@extends('adminLayout.adminframe')
@section('title','Create Vendor')
@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Vendors</h1>
    </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('vendors.index') }}"> Back</a>
        </div>
        <form action="{{ route('vendors.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
                    </div>
                    @if ($errors->has('name'))
                        <div class="text-danger">
                        <p>{{ $errors->first('name') }}</p>
                    </div>@endif
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email:</strong>
                        <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                    </div>
                    @if ($errors->has('email'))
                    <div class="text-danger">
                    <p>{{ $errors->first('email') }}</p>
                </div>@endif
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Password:</strong>
                        <input type="password" name="password" class="form-control" placeholder="Password" value="{{ old('password') }}">
                    </div>
                    @if ($errors->has('password'))
                    <div class="text-danger">
                    <p>{{ $errors->first('password') }}</p>
                </div>@endif
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Shop Name:</strong>
                        <input type="text" name="shop_name" class="form-control" placeholder="Shop Name" value="{{ old('shop_name') }}">
                    </div>
                    @if ($errors->has('shop_name'))
                    <div class="text-danger">
                    <p>{{ $errors->first('shop_name') }}</p>
                </div>@endif
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Address:</strong>
                        <textarea name="address" class="form-control" id="address" cols="30" rows="6" value="{{ old('address') }}"></textarea>
                    </div>
                    @if ($errors->has('address'))
                    <div class="text-danger">
                    <p>{{ $errors->first('address') }}</p>
                </div>@endif
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>city:</strong>
                        <input type="text" name="city" class="form-control" placeholder="City" value="{{ old('city') }}">
                    </div>
                    @if ($errors->has('city'))
                    <div class="text-danger">
                    <p>{{ $errors->first('city') }}</p>@endif
                </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>postal_code:</strong>
                        <input type="text" name="postal_code" class="form-control" placeholder="Postal Code" value="{{ old('postal_code') }}">
                    </div>
                    @if ($errors->has('postal_code'))
                    <div class="text-danger">
                    <p>{{ $errors->first('postal_code') }}</p>@endif
                </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Profile Picture:</strong>
                        <input type="file" name="profile_picture" class="form-control" placeholder="Profile Picture">
                    </div>
                    @if ($errors->has('profile_picture'))
                    <div class="text-danger">
                    <p>{{ $errors->first('profile_picture') }}</p>
                    </div>
                    @endif
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
    </div>
</main>
@endsection
