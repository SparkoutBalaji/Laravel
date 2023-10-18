@extends('layout.frame')
@section('title','LOGIN')
@section('content')
    <form action="/login" method="post">
    @csrf
    <label for="name">USERNAME :
        <input type="email" name="name" id="uname" placeholder="email">
    </label>
    <label for="password">
        <input type="password" name="password" id="password" placeholder="password">
    </label>
    <input type="submit" value="SUBMIT">
    </form>
@endsection
