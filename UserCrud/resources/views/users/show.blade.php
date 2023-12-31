@extends('layout.frame')
@section('title','show user')
@section('content')
<h1>User Details</h1>
<p><strong>Name:</strong> {{ $user->name }}</p>
<p><strong>Email:</strong> {{ $user->email }}</p>
<a href="{{ route('users.index') }}" class="btn btn-secondary">Back to List</a>
<a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit</a>
@endsection
