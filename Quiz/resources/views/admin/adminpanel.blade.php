@extends('Layout.frame')
@section('title','Admin Panel')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
@section('content')
<style>

body {
            margin: 0;
            padding: 0;
        }
        .left {
            display: flex;
        }
    .menu {
            width: 200px;
            padding: 20px;
        }
        .right {
            flex: 1;
            padding: 20px;
        }
        .menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .menu li {
            padding: 10px 0;
        }
        .menu a {
            text-decoration: none;
            color: #555;
            font-weight: bold;
        }
</style>
<div class="left">
    <div class="menu">
        <ul>
            <li><a href="{{ route('create.questions') }}"><i class="bi bi-box-arrow-right"></i>Create Questions</a></li>
            <li><a href="{{ route('questions.list') }}"><i class="bi bi-card-list"></i>Question List</a></li>
        </ul>
    </div>
    <div class="right">
        @yield('admin-content')
    </div>
</div>
@endsection

