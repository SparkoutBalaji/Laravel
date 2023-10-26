@extends('Layout.frame')
@section('title','Admin Panel')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-2">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('create.questions') }}">Create Questions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Questions List</a>
                </li>

            </ul>
        </div>
    </div>
        <h1>Welcome To Admin Page</h1>
@endsection

