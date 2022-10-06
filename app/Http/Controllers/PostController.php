<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function showSinglePost(Post $post)
    {
        $post->increment('views');
        $comments = $post->comments();
        $comments = $comments->get();
        // dd($comments[0]->body);
        return view('single-blog',[
            'post' => $post,
            'comments' => $comments
        ]);
    }
}
