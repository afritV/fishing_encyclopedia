<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Option;
use App\Models\Tackle;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class TackleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tacles = Tackle::orderBy('created_at', 'desc')->get();
        return view('admin.tacles.index',[
            'tacles' => $tacles,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('created_at', 'desc')->get();
        $options = Option::orderBy('created_at', 'desc')->get();

        return view('admin.tacles.create', [
            'categories' => $categories,
            "options" => $options,
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tacles = new Tackle();
        $tacles->title = $request->title;
        $tacles->text = $request->text;
        $tacles->img = '/' . $request->img;
        $tacles->category_id = $request->cat_id;
        $tacles->save();


        return redirect()->back()->withSuccess('Статья была успешно добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Tackle $tacles
     * @return \Illuminate\Http\Response
     */
    public function show(Tackle $tacles)
    {
        return view('home.show', [
            '$tacles' => $tacles,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Tackle $tacles
     * @return \Illuminate\Http\Response
     */
    public function edit(Tackle $tacles)
    {
        $categories = Category::orderBy('created_at', 'desc')->get();

        return view('admin.tacles.edit', [
            'tacles' => $tacles,
            'categories' => $categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Tackle $tacles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tackle $tacles)
    {
        $tacles->title = $request->title;
        $tacles->text = $request->text;
        $tacles->img = '/' . $request->img;
        $tacles->category_id = $request->cat_id;
        $tacles->save();

        return redirect()->back()->withSuccess('Снасть была успешно изменена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Tackle $tacles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tackle $tacles)
    {
        $tacles->delete();
        return redirect()->back()->withSuccess('Снасть была успешно удален');
    }
}
