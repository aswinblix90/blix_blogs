@extends('layouts.default')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h4 class="mb-5 text-center">User Login</h4>
                <form class="form-contact comment_form" method="POST" action="/user/login">
                    @csrf
                    <div class="form-group">
                        <input class="form-control" value="{{old('email')}}" name="email" id="email" type="email"
                            placeholder="Email">
                        @error('email')
                            <small id="email" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="password" id="password" type="password"
                            placeholder="Password">
                        @error('password')
                            <small id="password" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="load_btn mb-3">
                        <input type="submit" class="btn_1" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection