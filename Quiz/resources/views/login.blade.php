@extends('Layout.frame')
@section('title','Login')
@section('content')
<style>
    .form{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .red{
        color:red;
    }
</style>
<div class="form">
    @if(Session::has('success'))
    <div class="aler aler-success">{{ Session::get('success') }}</div>
    @endif
    @if(Session::has('fail'))
    <div class="aler aler-danger">{{ Session::get('fail') }}</div>
    @endif
    <form action="/authentication/user" method="post">
    <h1>LOGIN FORM</h1>
    <label for="email">USERNAME</label>
        <input type="email" name="email" id="email" class="@error('email') error1 @enderror"> <br> <br>
    @error('email')
    <div class="red">{{ $message }}</div>
    @enderror
    <label for="password">PASSWORD </label>
    <input type="password" name="password" id="password"> <br> <br>
    @error('password')
    <div class="red">{{ $message }}</div>
    @enderror
    <input type="submit" value="LOGIN">
    @csrf
</form>
</div>
<h4>New User.?<a href="{{ route('registration') }}">Register Here...</a></h4>
@endsection
