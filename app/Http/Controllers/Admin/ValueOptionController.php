<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Option;
use App\Models\OptionValue;
use App\Models\Tackle;
use Illuminate\Http\Request;

class ValueOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $values = Option::orderBy('created_at','desc')->get();
        $tackles = Tackle::orderBy('created_at','desc')->get();
        return view('admin.value.create',[
            'tackles' => $tackles,
            'values' => $values,
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
        $new_value = new OptionValue();
        $new_value->value = $request -> value;
        $new_value->option_id = $request -> option_id;
        $new_value->tackle_id = $request -> tackle_id;
        $new_value->save();
        return redirect()->back()->withSuccess('Значение было успешно добавлено');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OptionValue  $optionValue
     * @return \Illuminate\Http\Response
     */
    public function show(ValueOptionController $optionValue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OptionValue  $optionValue
     * @return \Illuminate\Http\Response
     */
    public function edit(ValueOptionController $optionValue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OptionValue  $optionValue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ValueOptionController $optionValue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OptionValue  $optionValue
     * @return \Illuminate\Http\Response
     */
    public function destroy(ValueOptionController $optionValue)
    {
        //
    }
}
