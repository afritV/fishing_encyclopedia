<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    public function create()
    {
        $categories = Category::orderBy('created_at','desc')->get();
        $subCategories = Subcategory::orderBy('created_at','desc')->get();

        return view('admin.post.create',[
            'categories' => $categories,
            "subCategories" => $subCategories,
        ]);

    }
}
