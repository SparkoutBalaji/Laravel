@extends('vendorLayout.frame')

@section('content')
    <div class="row">
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
            <strong>Error!</strong> <br>
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
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
                @if ($errors->has('name'))
                    <div class="text-danger">
                    <p>{{ $errors->first('name') }}</p>
                </div>@endif
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" class="form-control" placeholder="Email">
                </div>
                @if ($errors->has('email'))
                <div class="text-danger">
                <p>{{ $errors->first('email') }}</p>
            </div>@endif
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Password:</strong>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                @if ($errors->has('password'))
                <div class="text-danger">
                <p>{{ $errors->first('password') }}</p>
            </div>@endif
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Shop Name:</strong>
                    <input type="text" name="shop_name" class="form-control" placeholder="Shop Name">
                </div>
                @if ($errors->has('shop_name'))
                <div class="text-danger">
                <p>{{ $errors->first('shop_name') }}</p>
            </div>@endif
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address:</strong>
                    <textarea name="address" class="form-control" id="address" cols="30" rows="6"></textarea>
                </div>
                @if ($errors->has('address'))
                <div class="text-danger">
                <p>{{ $errors->first('address') }}</p>
            </div>@endif
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>city:</strong>
                    <input type="text" name="city" class="form-control" placeholder="City">
                </div>
                @if ($errors->has('city'))
                <div class="text-danger">
                <p>{{ $errors->first('city') }}</p>@endif
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>postal_code:</strong>
                    <input type="text" name="postal_code" class="form-control" placeholder="Postal Code">
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
    </form>
@endsection
