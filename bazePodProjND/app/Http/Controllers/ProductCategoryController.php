<?php

namespace App\Http\Controllers;

use App\Models\productcategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productcategory = productcategory::all();
        return view('productcategory.index', ['productcategory' => $productcategory]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\productcategory  $productcategory
     * @return \Illuminate\Http\Response
     */
    public function show(productcategory $productcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\productcategory  $productcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(productcategory $productcategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\productcategory  $productcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, productcategory $productcategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\productcategory  $productcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(productcategory $productcategory)
    {
        //
    }
}
