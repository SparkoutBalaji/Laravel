@extends('layout.frame')
@section('title','create user')
@section('content')
<h1>Create User</h1>
<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
        @error('name')
                <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
        @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
    </div>
    <button type="submit" class="btn btn-primary">Create User</button>
</form>
@endsection
