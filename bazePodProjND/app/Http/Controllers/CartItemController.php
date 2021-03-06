<?php

namespace App\Http\Controllers;

use App\Models\Cartitem;
use Illuminate\Http\Request;

class CartItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartitem = cartitem::with(['product'])->get();
        return view('cartitem.index', ['cartitem' => $cartitem]);
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
     * @param  \App\Models\cartitem  $cartitem
     * @return \Illuminate\Http\Response
     */
    public function show(Cartitem $cartitem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cartitem  $cartitem
     * @return \Illuminate\Http\Response
     */
    public function edit(Cartitem $cartitem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cartitem  $cartitem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cartitem $cartitem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cartitem  $cartitem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cartitem $cartitem)
    {
        //
    }
}
