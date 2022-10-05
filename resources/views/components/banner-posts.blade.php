@props(['posts'])
<section class="banner_post">
    <div class="container-fluid">
        <div class="row">
            @if (count($posts) >= 2)
            <div class="col-lg-12">
                <div class="banner_post_1 banner_post_bg_1">
                    <div class="banner_post_iner text-center">
                        <a href="category.html">
                            <h5> {{$posts[0]->category->name}}</h5>
                        </a>
                        <a href="single-blog.html">
                            <h2>{{$posts[0]->title}}</h2>
                        </a>
                        <p><span> By {{$posts[0]->author->name}}</span> / {{$posts[0]->created_at->format('F') . " " . $posts[0]->created_at->format('d') . ", " . $posts[0]->created_at->format('Y') }}</p>
                    </div>
                </div>
                <div class="banner_post_2 banner_post_bg_2">
                    <div class="banner_post_iner">
                        <a href="category.html">
                            <h5> {{$posts[1]->category->name}}</h5>
                        </a>
                        <a href="single-blog.html">
                            <h2>{{$posts[1]->title}}</h2>
                        </a>
                        <p><span> By {{$posts[1]->author->name}}</span> / March 30 , 2019</p>
                    </div>
                </div>
            </div>
            @else
            <div class="col-lg-12">
                <p class="text-center alert alert-warning">no post found please check again later</p>
            </div>    
            @endif
        </div>
    </div>
</section>