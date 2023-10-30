@extends('layout.frame')
@section('title','edit User')
@section('content')
<h1>Edit User</h1>
<a href="{{ route('users.index') }}" class="btn btn-secondary">Back to List</a>
<a href="{{ route('users.show', $user->id) }}" class="btn btn-info">View</a>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}">
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update User</button>
    </form>
@endsection
