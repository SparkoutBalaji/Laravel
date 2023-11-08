@extends('adminLayout.adminframe')
@section('title','Vendors')
@section('content')
<style>
    img{
        width: 100%;
        height: 100%;
    }
    .table.table-bordered {
        width: 100%;
    }
    </style>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Vendors</h1>
        </div>
        <div class="text-right float-right">
            <a class="btn btn-success" href="{{ route('vendors.create') }}"> Create New Vendor</a>
        </div>
<div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
            <table class="table table-bordered">
                <tr>
                    <th>#</th>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>password</th>
                    <th>shop_name</th>
                    <th>address</th>
                    <th>city</th>
                    <th>postal_code</th>
                    <th>profile_picture</th>
                    <th>is_verified</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($vendors as $vendor)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $vendor->id }}</td>
                    <td>{{ $vendor->name }}</td>
                    <td>{{ $vendor->email }}</td>
                    <td>{{ $vendor->password }}</td>
                    <td>{{ $vendor->shop_name }}</td>
                    <td>{{ $vendor->address }}</td>
                    <td>{{ $vendor->city }}</td>
                    <td>{{ $vendor->postal_code }}</td>
                    <td><img src="{{ asset('profile_pictures/'.$vendor->profile_picture) }}" alt="Profile Picture"></td>
                    <td>{{ $vendor->is_verified ? 'Yes' : 'No' }}</td>
                    <td>
                        <form action="{{ route('vendors.destroy',$vendor->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('vendors.show',$vendor->id) }}">Show</a>

                            <a class="btn btn-primary" href="{{ route('vendors.edit',$vendor->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger" onclick="return confirm('Sure Want Delete?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
     </div>   </div>

    </div>





    {!! $vendors->links() !!}
    </main>
@endsection
