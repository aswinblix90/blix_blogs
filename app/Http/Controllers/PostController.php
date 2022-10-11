<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
            'body' => ['required'],
            'thumbnail' => ['required']
        ]);
        $attributes['user_id'] = auth()->user()->id;
        $attributes['category_id'] = $request->category;
        $attributes['slug'] = Str::slug($request->title);
        $attributes['thumbnail'] = $request->file('thumbnail')->store('thumbnails');
        // dd($attributes);
        if(Post::create($attributes)){
            return redirect('/')->with('status', 'Posted created successfully');
        }
        return back()->with('status', 'Something went wrong...Try again');
    }

    public function updatePost(Post $post, Request $request)
    {
        $attributes = $request->validate([
            'title' => ['required'],
            'excerpt' => ['required'],
            'body' => ['required']
        ]);
        $attributes['category_id'] = $request->category;
        $attributes['slug'] = Str::slug($request->title);
        if($request->file('thumbnail')){
            if (Storage::exists($post->thumbnail)) {
                Storage::delete($post->thumbnail);
                $attributes['thumbnail'] = $request->file('thumbnail')->store('thumbnails');
            }
        }else{
            $attributes['thumbnail'] = $post->thumbnail;
        }
        // $currentPost = Post::whereSlug($post)->get();
        $post->update($attributes);
            
        return redirect('/user/all-post')->with('status', 'Post updated successfully');
            // return redirect()->back()->with('status', 'Error occured...Verify data before posting');
        // dd($currentPost);
    }
}
