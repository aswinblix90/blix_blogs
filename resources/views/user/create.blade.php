@extends('layouts.default')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h4 class="mb-5 text-center">User Registration</h4>
                <form class="form-contact comment_form" method="POST" action="/user/create">
                    @csrf
                    <div class="form-group">
                        <input class="form-control" value="{{old('name')}}" name="name" id="name" type="text"
                            placeholder="Name">
                        @error('name')
                            <small id="name" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input class="form-control" value="{{old('username')}}" name="username" id="username" type="text"
                            placeholder="Username">
                        @error('username')
                            <small id="username" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
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
                    <div class="form-group">
                        <input class="form-control" name="password_confirmation" id="password_confirmation" type="password"
                            placeholder="Confirm Password">
                        @error('password_confirmation')
                            <small id="password_confirmation" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="load_btn mb-3">
                        <input type="submit" class="btn_1" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection