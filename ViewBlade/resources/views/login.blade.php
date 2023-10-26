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
    <label for="name">USERNAME :</label><br>
        <input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="email" class="@error('email') error @enderror"> <br><br>
        @error('email')
        <div>{{ $message }}</div>
        @enderror
    <label for="password">PASSWORD :</label><br>
        <input type="text" name="password" id="password" value="{{ old('password') }}" placeholder="password" class="@error('password') error @enderror"> <br><br>
        @error('password')
        <div>{{ $message }}</div>
        @enderror
    <input type="submit" value="SUBMIT">
    </form>
@endsection
