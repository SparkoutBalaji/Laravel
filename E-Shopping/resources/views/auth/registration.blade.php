@extends('layout.frame')
@section('title','Registration')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <h4>REGISTRATION</h4>
                <form action="" method="post">

                    @csrf
                    <div class="form-group">
                        <label for="name">NAME</label>
                        <i class="fa-solid fa-person-circle-check"></i>
                        <input type="text" name="name" class="form-control @error('name') error @enderror" placeholder="Enter Full Name" value="{{ old('name') }}">
                        @if ($errors->has('name'))
                            <div class="text-danger">
                            <p>{{ $errors->first('name') }}</p>
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="email">EMAIL</label>
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="email" class="form-control @error('email') error @enderror" placeholder="Enter Email ID" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                        <div class="text-danger">
                            <p>{{ $errors->first('email') }}</p>
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="password">PASSWORD</label>
                        <i class="fa-solid fa-key"></i>
                        <input type="password" name="password" class="form-control @error('password') error @enderror" placeholder="Enter Password" value="{{ old('password') }}">
                        @if ($errors->has('password'))
                        <div class="text-danger">
                            <p>{{ $errors->first('password') }}</p>
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">CONFIRM PASSWORD</label>
                        <i class="fa-solid fa-circle-check"></i>
                        <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') error @enderror" id="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Enter Confirm Password">
                        @if ($errors->has('password_confirmation'))
                            <div class="text-danger">
                            <p>{{ $errors->first('password_confirmation') }}</p>
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">Register</button>
                    </div>
                    <div class="form-group">
                        <label for="login">Already Have an Account.? <br>
                            <i class="fa-solid fa-arrow-right-to-bracket"></i> <a href="{{ route('login') }}">Login Here...</a></label>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
