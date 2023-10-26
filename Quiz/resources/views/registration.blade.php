@extends('Layout.frame')
@section('title','Registration')
@section('content')
<style>
    label{
        font-weight: bold;
    }
    .red{
        color:red;
    }
    .error1{
        border: 2px solid red;
    }
    .errors{
        color: red;
    }
    .form{
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
@if(Session::has('success'))
    <div class="alert alert-success">{{ session::get('success') }}</div>
    @endif
    @if(Session::has('fail'))
    <div class="alert alert-danger">{{ session::get('fail') }}</div>
    @endif
<div class="form">
<form action="{{ route('register.user') }}" method="post">
    <h1>REGISTRATION FORM</h1>
    <label for="name">NAME</label><br>
    <input type="text" name="name" id="name" value="{{ old('name') }}" class="@error('name') error1 @enderror"><br><br>
    @error('name')
    <div class="red">{{ $message }}</div>
    @enderror
    <label for="email">EMAIL</label><br>
    <input type="text" name="email" id="email" value="{{ old('email') }}" class="@error('email') error1 @enderror"><br><br>
    @error('email')
    <div class="red">{{ $message }}</div>
    @enderror
    <label for="password">PASSWORD </label><br>
    <input type="password" name="password" id="password" value="{{ old('password') }}" class="@error('password') error1 @enderror"><br><br>
    @error('password')
    <div class="red">{{ $message }}</div>
    @enderror
    <label for="password_confirmation">CONFIRM PASSWORD </label><br>
    <input type="password" name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation') }}" class="@error('password_confirmation') error1 @enderror"><br><br>
    @error('password_confirmation')
    <div class="red">{{ $message }}</div>
    @enderror
    <input type="submit" value="REGISTER"> <br> <br>
    @csrf
</form></div>
<h4>Already Register.!! <a href="{{ route('login') }}">Login Here..</a></h4>
@endsection
