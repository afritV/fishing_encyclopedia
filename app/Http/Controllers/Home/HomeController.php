<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Option;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $options = Option::all();
        $posts = Post::orderBy('created_at','desc')->get();
        return view('home.index',[
            "posts" => $posts,
        ]);

//        foreach ($options as $option){
//            echo $option->category['title'];
//        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
//     * @param  \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {

//        return view('home.show',[
//            'post' => $post,
//        ]);

//        echo $post->category->options;

        foreach ($post->category as $cat){
            foreach ($cat->options as $option){
                echo $option['id'];
            }
        }



    }
}
