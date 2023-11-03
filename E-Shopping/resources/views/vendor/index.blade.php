@extends('vendorLayout.frame')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>E - Shopping... Vendors</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('vendors.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>

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
            {{-- <td><img src="{{ asset('storage/app/public/profile_picture' . $vendor->profile_picture) }}" alt="{{ $vendor->name }} Image"/></td> --}}
            <td><img src="{{ asset('/storage/app/public/profile_pictures/'.$vendor->profile_picture) }}" alt="{{ $vendor->name }} Image"/></td>
            <td>{{ $vendor->is_verified ? 'Yes' : 'No' }}</td>
            <td>
                <form action="{{ route('vendors.destroy',$vendor->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('vendors.show',$vendor->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('vendors.edit',$vendor->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {{-- {!! $vendors->links() !!} --}}

@endsection
