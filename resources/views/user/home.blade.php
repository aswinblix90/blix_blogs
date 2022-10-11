@extends('layouts.default')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 class="text-center"> Welcome {{auth()->user()->name}}</h1>
            </div>
        </div>
    </div>
@endsection