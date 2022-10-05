@extends('layouts.default')
@section('content')
    <x-banner-posts :posts="$bannerPost"></x-banner-posts>

    <section class="all_post section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @foreach ($posts->skip(2) as $post)
                        <x-post-card :post="$post"></x-post-card>
                    @endforeach
                    <div class="load_btn text-center">
                        <a href="#" class="btn_1">LOADING MORE <i class="ti-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <x-sidebar-widget></x-sidebar-widget>
                </div>
            </div>
        </div>
    </section>
@endsection