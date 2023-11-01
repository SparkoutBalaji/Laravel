@extends('layout.frame')
@section('title','Login')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <form action="">
                    <h4>LOGIN</h4>
                    <div class="form-group">
                        <label for="email">EMAIL</label>
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="email" class="form-control @error('email') error @enderror" placeholder="Enter Email ID" value="">
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">PASSWORD</label>
                        <i class="fa-solid fa-key"></i>
                        <input type="password" name="password" class="form-control @error('password') error @enderror" placeholder="Enter Password" value="">
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">Login</button>
                    </div>
                    <div class="form-group">
                        <label for="login">New User.? <br>
                            <i class="fa-solid fa-id-card"></i> <a href="{{ route('registration') }}"> Registration Here...</a></label>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
