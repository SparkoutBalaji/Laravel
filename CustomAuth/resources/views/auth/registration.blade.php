@extends('layout.frame')
@section('title','Registration')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <h4>REGISTRATION</h4>
                <form action="">
                    <div class="form-group">
                        <label for="name">NAME</label>
                        <i class="fa-solid fa-person-circle-check"></i>
                        <input type="text" name="name" class="form-control" placeholder="Enter Full Name" value="">
                    </div>
                    <div class="form-group">
                        <label for="email">EMAIL</label>
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="email" class="form-control" placeholder="Enter Email ID" value="">
                    </div>
                    <div class="form-group">
                        <label for="password">PASSWORD</label>
                        <i class="fa-solid fa-key"></i>
                        <input type="password" name="password" class="form-control" placeholder="Enter Password" value="">
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
