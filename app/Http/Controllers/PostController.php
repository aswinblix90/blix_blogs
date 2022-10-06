<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function showSinglePost(Post $post)
    {
        $post->incrementView();
        return view('single-blog',[
            'post' => $post
        ]);
    }
}
