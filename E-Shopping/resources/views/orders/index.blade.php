@extends('vendorLayout.vendorframe')
@section('title','Order Details')
@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Orders</h1>
    </div>
{{-- <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('orders.create') }}"> Create New Product</a>
        </div>
    </div>
</div> --}}
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Id</th>
            <th>User_Id</th>
            <th>Amount</th>
            <th>Total Count</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order)
        <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->user_id }}</td>
            <td>{{ $order->amount }}</td>
            <td>{{ $order->total_count }}</td>
            <td>{{ $order->status ? 'Active' : 'In-Active' }}</td>

        </tr>
        @endforeach

    </tbody>
    </table>

</main>
@endsection
