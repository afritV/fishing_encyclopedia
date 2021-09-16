<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->get();
        return view('home.index',[
            "posts" => $posts,
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $posts_all = Post::orderBy('created_at','desc')->get();
        return view('home.show',[
            '$post' => $post,
            "posts_all" => $posts_all,
        ]);
    }
}
