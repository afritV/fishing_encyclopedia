<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Option;
use App\Models\Tackle;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $tacles = Tackle::orderBy('created_at','desc')->get();
        return view('home.index',[
            "tacles" => $tacles,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tackle $post
* //     * @param  \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function show(Tackle $tacles)
    {

        return view('home.show',[
            "tacles" => $tacles,
        ]);
    }
}
