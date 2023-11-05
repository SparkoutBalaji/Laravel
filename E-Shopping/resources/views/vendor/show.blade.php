@extends('vendorLayout.frame')
@section('content')
<style>
    img{
        width: 300px;
        height: 500px;
    }
    .table.table-bordered {
        width: 100%;
    }
    </style>
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Show Vendor</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('vendors.index') }}"> Back</a>
        </div>
    </div>
</div>

<table class="table table-bordered">
    <tr>
        <th>Id</th>
        <td>{{ $vendor->id }}</td>
    </tr>
    <tr>
        <th>Name</th>
        <td>{{ $vendor->name }}</td>
    </tr>
    <tr>
        <th>Email</th>
        <td>{{ $vendor->email }}</td>
    </tr>
    <tr>
        <th>Password</th>
        <td>{{ $vendor->password }}</td>
    </tr>
    <tr>
        <th>Shop Name</th>
        <td>{{ $vendor->shop_name }}</td>
    </tr>
    <tr>
        <th>Address</th>
        <td>{{ $vendor->address }}</td>
    </tr>
    <tr>
        <th>City</th>
        <td>{{ $vendor->city }}</td>
    </tr>
    <tr>
        <th>Postal Code</th>
        <td>{{ $vendor->postal_code }}</td>
    </tr>
    <tr>
        <th>Profile Picture</th>
        <td><img src="{{ asset('storage/' . $vendor['profile_picture']) }}" alt="Profile Picture"></td>
    </tr>
    <tr>
        <th>Is Verified</th>
        <td>{{ $vendor->is_verified ? 'Yes' : 'No' }}</td>
    </tr>
</table>

<form action="{{ route('vendors.destroy',$vendor->id) }}" method="POST">

    <a class="btn btn-primary" href="{{ route('vendors.edit',$vendor->id) }}"> Edit</a>

    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger">Delete</button>
</form>
@endsection


