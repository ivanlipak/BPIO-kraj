<?php

namespace App\Http\Controllers;

use App\Models\shoppingsession;
use Illuminate\Http\Request;

class ShoppingSessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shoppingsession=shoppingsession::with(['user'])->get();
        return view('shoppingsession.index', ['shoppingsession'=>$shoppingsession]);
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
     * @param  \App\Models\shoppingsession  $shoppingsession
     * @return \Illuminate\Http\Response
     */
    public function show(shoppingsession $shoppingsession)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\shoppingsession  $shoppingsession
     * @return \Illuminate\Http\Response
     */
    public function edit(shoppingsession $shoppingsession)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\shoppingsession  $shoppingsession
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, shoppingsession $shoppingsession)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\shoppingsession  $shoppingsession
     * @return \Illuminate\Http\Response
     */
    public function destroy(shoppingsession $shoppingsession)
    {
        //
    }
}
