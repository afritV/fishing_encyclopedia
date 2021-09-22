<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Category;
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
     * @param  \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post, Category $category)
    {
        return view('home.show',[
            'category'=>$category,
            'post' => $post,
        ]);
    }
}
