<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class IndexController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();
        // $posts->take(2);
        // dd();
        return view('index',[
            'bannerPost' => $posts->take(2),
            'posts' => $posts
        ]);
    }
}
