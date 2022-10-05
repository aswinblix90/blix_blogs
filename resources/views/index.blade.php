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
                    <div class="sidebar_widget">
                        <div class="sidebar_tittle">
                            <h3>Search Objects</h3>
                        </div>
                        <form action="#">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder='Search Keyword'
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                                    <div class="input-group-append">
                                        <button class="btn" type="button"><i class="ti-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="sidebar_tittle">
                            <h3>Popular Feeds</h3>
                        </div>
                        <div class="single_catagory_post post_2 single_border_bottom">
                            <div class="category_post_img">
                                <img src="img/sidebar/sidebar_1.png" alt="">
                            </div>
                            <div class="post_text_1 pr_30">
                                <p><span> By Michal</span> / March 30 , 2019</p>
                                <a href="single-blog.html">
                                    <h3>Subdue lesser beast winged
                                        bearing meat tree one</h3>
                                </a>
                            </div>
                        </div>
                        <div class="single_catagory_post post_2 single_border_bottom">
                            <div class="category_post_img">
                                <img src="img/sidebar/sidebar_2.png" alt="">
                            </div>
                            <div class="post_text_1 pr_30">
                                <p><span> By Michal</span> / March 30 , 2019</p>
                                <a href="single-blog.html">
                                    <h3>Subdue lesser beast winged
                                        bearing meat tree one</h3>
                                </a>
                            </div>
                        </div>
                        <div class="single_catagory_post post_2">
                            <div class="category_post_img">
                                <img src="img/sidebar/sidebar_3.png" alt="">
                            </div>
                            <div class="post_text_1 pr_30">
                                <p><span> By Michal</span> / March 30 , 2019</p>
                                <a href="single-blog.html">
                                    <h3>Subdue lesser beast winged
                                        bearing meat tree one</h3>
                                </a>
                            </div>
                        </div>
                        <div class="sidebar_tittle">
                            <h3>Categories</h3>
                        </div>
                        <div class="single_catagory_item category">
                            <ul class="list-unstyled">
                                <li><a href="single-blog.html">Culture (12)</a></li>
                                <li><a href="single-blog.html">Creative Design (15)</a></li>
                                <li><a href="single-blog.html">Illustration (25)</a></li>
                                <li><a href="single-blog.html">Production (16)</a></li>
                                <li><a href="single-blog.html">Mangement (10)</a></li>
                                <li><a href="single-blog.html">Branding (15)</a></li>
                            </ul>
                        </div>
                        {{-- <div class="sidebar_tittle">
                            <h3>Popular Tags</h3>
                        </div>
                        <div class="single_catagory_item tags">
                            <ul class="list-unstyled">
                                <li><a href="single-blog.html">Nature</a></li>
                                <li><a href="single-blog.html">business</a></li>
                                <li><a href="single-blog.html">tech</a></li>
                                <li><a href="single-blog.html">News</a></li>
                                <li><a href="single-blog.html">html</a></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection