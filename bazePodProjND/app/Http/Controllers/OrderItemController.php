<?php

namespace App\Http\Controllers;

use App\Models\orderitem;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orderitem = orderitem::all();
        return view('orderitem.index', ['orderitem' => $orderitem]);
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
     * @param  \App\Models\orderitem  $orderitem
     * @return \Illuminate\Http\Response
     */
    public function show(orderitem $orderitem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\orderitem  $orderitem
     * @return \Illuminate\Http\Response
     */
    public function edit(orderitem $orderitem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\orderitem  $orderitem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, orderitem $orderitem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\orderitem  $orderitem
     * @return \Illuminate\Http\Response
     */
    public function destroy(orderitem $orderitem)
    {
        //
    }
}