@extends('layout.frame')
@section('title','FORM PAGE')
@section('content')
    <style>
        .div{
            margin: 10px;
        }
        textarea{
            height: 50px;
        }
        .error{
            border: 2px solid red;
        }
    </style>
    <div>
        <form action="/form/store" method="post" enctype="multipart/form-data">
            @csrf
            {{-- @if($errors->any())
                @foreach($errors->all() as $error)
                {{ $error }} <br>
                @endforeach
                @endif --}}
            <h2>FORM PAGE</h2>
            <div class="div">
                <label for="name">NAME</label><br>
                <input type="text" name="name" id="name" value="{{ old('name') }}" class="@error('name') error @enderror">
                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="div">
                <label for="email">EMAIL</label><br>
                <input type="email" name="email" id="email" value="{{ old('email') }}" class="@error('email') error @enderror">
                @error('email')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="div">
                <label for="phone">PHONE</label><br>
                <input type="tel" name="phone" id="phone" value="{{ old('phone') }}" class="@error('phone') error @enderror">
                @error('phone')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="div">
                <label for="profileImage">PROFILE IMAGE</label><br>
                <input type="file" name="profileImage" id="profileImage" value="{{ old('profileImage') }}" class="@error('profileImage') error @enderror">
                @error('profileImage')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="div">
                <label for="message">MESSAGE</label><br>
                <textarea name="message" id="message" cols="30" rows="10" value="{{ old('message') }}" class="@error('message') error @enderror"></textarea>
                @error('message')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="div">
                <button type="submit">SUBMIT</button>
            </div>

        </form>
    </div>
@endsection
