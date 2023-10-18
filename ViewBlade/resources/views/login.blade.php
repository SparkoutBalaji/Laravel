@extends('layout.frame')
@section('title','LOGIN')
<style>
    .error{
        border: 2px solid red;
    }
</style>
@section('content')
    <form action="/login" method="post">
    @csrf
    <label for="name">USERNAME :</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="email" class="@error('email') error @enderror"> <br><br>

    <label for="password">PASSWORD :</label>
        <input type="text" name="password" id="password" value="{{ old('password') }}" placeholder="password" class="@error('password') error @enderror"> <br><br>

    <input type="submit" value="SUBMIT">
    </form>
@endsection
