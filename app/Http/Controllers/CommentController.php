<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'body' => ['required'],
            'name' => ['required'],
            'email' => ['required', 'email']
        ]);
        $attributes['post_id'] = $request->postId;
        Comment::create($attributes);
        return Redirect::back()->with('status', 'comment posted successfully');
        // dd($request->name);
    }
}
