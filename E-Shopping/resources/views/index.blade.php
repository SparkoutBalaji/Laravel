@extends('layout.frame')
@section('title','E-Shopping')
@section('content')
<div class="navbar">
  <a href=""><img src="{{ asset('logo/logo.jpg') }}" alt="" id="logo">E-Shopping</a>
  <a href="{{ route('login') }}" class="login">Login</a>
  <a href="{{ route('register') }}" class="register">Register</a>
</div>

<h1>E-Shopping Website</h1>
@endsection

