@extends('layout.frame')
@section('title','Vendor Login')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <form action="{{ route('login.authenticate') }}" method="post">
                    <h4>LOGIN</h4>
                    @csrf
                    <div class="form-group">
                        <label for="email">EMAIL</label>
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Email ID" value="">
                        @if ($errors->has('email'))
                        <div class="text-danger">
                            <p>{{ $errors->first('email') }}</p>
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="password">PASSWORD</label>
                        <i class="fa-solid fa-key"></i>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter Password" value="">
                        @if ($errors->has('password'))
                        <div class="text-danger">
                            <p>{{ $errors->first('password') }}</p>
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
