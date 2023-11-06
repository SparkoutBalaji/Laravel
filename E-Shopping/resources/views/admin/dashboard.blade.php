@extends('adminLayout.adminframe')
@section('title','Admin Panel')
@section('content')
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Users Count</h5>
                            <p class="card-text">123</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Category Count</h5>
                            <p class="card-text">45</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Vendor Count</h5>
                            <p class="card-text">67</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@yield('content')
@endsection

