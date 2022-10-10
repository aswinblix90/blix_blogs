<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

    public function create(Request $request)
    {
        $attributes = $request->validate([
            'title' => ['required'],
            'excerpt' => ['required'],
            'body' => ['required']
        ]);
        $attributes['user_id'] = auth()->user()->id;
        $attributes['category_id'] = $request->category;
        $attributes['slug'] = Str::slug($request->title);
        $attributes['thumbnail'] = $request->file('thumbnail')->store('thumbnails');
        // dd($attributes);
        if(Post::create($attributes)){
            return redirect('/')->with('status', 'Posted created successfully');
        }
        return back()->with('Something went wrong...Try again');
    }
}
