<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Option;
use App\Models\Tackle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function index(){
            $categories = Category::orderBy('created_at','desc')->get();
            $options = Option::all();
            return view('admin.option.index',[
                'options' => $options,
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
        $new_option = new Option();
        $new_option->name = $request -> name;
        $new_option->value = $request -> value;
        $new_option->category_id = $request -> category_id;
        $new_option->save();
        return redirect()->back()->withSuccess('Опция была успешно добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function show(Option $option)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Option  $options
     * @return \Illuminate\Http\Response
     */
    public function edit(Option $option)
    {
        $tacles = Tackle::all();
        $categories = Category::orderBy('created_at','desc')->get();
        return view('admin.option.edit', [
            "option" => $option,
            "categories" => $categories,
            'tacles' => $tacles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Option $option)
    {
        $option->name = $request -> name;
        $option->value = $request -> value;
        $option->save();
        return redirect()->back()->withSuccess('Опция была успешно обновлена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function destroy(Option $option)
    {
        //
    }
}
