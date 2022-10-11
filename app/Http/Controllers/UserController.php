<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => ['required'],
            'username' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', 'min:6'],
        ]);
        if (User::create($attributes)) {
            return redirect('/user/login')->with('status', 'User account created Successfully');
        }
    }

    public function myPosts()
    {
        // $test = Post::where('user_id', auth()->user()->id);
        // dd($test->get());
        return view('user.all-posts',[
            'posts' => Post::where('user_id', auth()->user()->id)->get()
        ]);
    }
}
