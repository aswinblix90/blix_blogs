@extends('layouts.default')
@section('content')
    @include('includes.breadcrumb')
    <section class="blog_area single-post-area all_post section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            <img class="img-fluid" src="/img/blog/single_blog_1.png" alt="">
                        </div>
                        <div class="blog_details">
                            <h2>{{$post->title}}</h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                                <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
                            </ul>
                            <p class="excert">{{$post->excerpt}}</p>
                            <p> {{$post->body}}</p>
                            <div class="quote-wrapper">
                                <div class="quotes">{{$post->body}}</div>
                            </div>
                            <p>{{$post->body}}</p>
                            <p>{{$post->body}}</p>
                        </div>
                    </div>
                    <div class="navigation-top">
                        <div class="d-sm-flex justify-content-between text-center">
                            <p class="like-info"><span class="align-middle"><i class="far fa-heart"></i></span> Lily and
                                4
                                people like this</p>
                            <div class="col-sm-4 text-center my-2 my-sm-0">

                            </div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                        <div class="navigation-area">
                            <div class="row">
                                <div
                                    class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                    <div class="thumb">
                                        <a href="#">
                                            <img class="img-fluid" src="img/post/preview.png" alt="">
                                        </a>
                                    </div>
                                    <div class="arrow">
                                        <a href="#">
                                            <span class="text-white ti-arrow-left"></span>
                                        </a>
                                    </div>
                                    <div class="detials">
                                        <p>Prev Post</p>
                                        <a href="#">
                                            <h4>Space The Final Frontier</h4>
                                        </a>
                                    </div>
                                </div>
                                <div
                                    class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                    <div class="detials">
                                        <p>Next Post</p>
                                        <a href="#">
                                            <h4>Telescopes 101</h4>
                                        </a>
                                    </div>
                                    <div class="arrow">
                                        <a href="#">
                                            <span class="text-white ti-arrow-right"></span>
                                        </a>
                                    </div>
                                    <div class="thumb">
                                        <a href="#">
                                            <img class="img-fluid" src="img/post/next.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-author">
                        <div class="media align-items-center">
                            <img src="img/blog/author.png" alt="">
                            <div class="media-body">
                                <a href="#">
                                    <h4>Harvard milan</h4>
                                </a>
                                <p>Second divided from form fish beast made. Every of seas all gathered use saying
                                    you're, he
                                    our dominion twon Second divided from</p>
                            </div>
                        </div>
                    </div>
                    <div class="comments-area">
                        <h4>{{count($comments)}} Comments</h4>
                        @if (count($comments))
                            @foreach ($comments as $comment)
                                <x-comment-list :comment="$comment"></x-comment-list>
                            @endforeach
                        @else
                        <p>no comments found</p>
                        @endif

                    </div>
                    <div class="comment-form">
                        <h4>Leave a Comment</h4>
                        <form class="form-contact comment_form" method="POST" action="/single-blog/{{$post->slug}}" id="commentForm">
                            @csrf
                            <input type="hidden" name="postId" value="{{$post->id}}">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="body" id="body" cols="30"
                                            rows="9" placeholder="Write Comment">{{old('body')}}</textarea>
                                        @error('body')
                                            <small id="body" class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" value="{{old('name')}}" name="name" id="name" type="text"
                                            placeholder="Name">
                                        @error('name')
                                            <small id="name" class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" value="{{old('name')}}" name="email" id="email" type="email"
                                            placeholder="Email">
                                            @error('email')
                                            <small id="email" class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="load_btn">
                                <input type="submit" class="btn_1" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <x-sidebar-widget></x-sidebar-widget>
                </div>
            </div>
        </div>
    </section>
@endsection