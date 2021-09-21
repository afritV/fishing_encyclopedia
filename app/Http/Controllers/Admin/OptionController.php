<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Options;
use App\Models\Post;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->get();
        $options = Options::orderBy('created_at','desc')->get();
        return view('admin.option.index', [
            "options" => $options,
            "posts" => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('created_at','desc')->get();

        return view('admin.option.create',[
            'categories' => $categories,
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_option = new Options();
        $new_option->name = $request -> name;
        $new_option->value = $request -> value;
        $new_option->category_id = $request -> category_id;
        $new_option->save();
        return redirect()->back()->withSuccess('Опция была успешно добавлена');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        dd($request);
        $subcategory->title = $request -> title;
        $subcategory->category_id = $request -> category_id;
        $subcategory->save();
        return redirect()->back()->withSuccess('Подкатегория была успешно обновлена');
    }


}
