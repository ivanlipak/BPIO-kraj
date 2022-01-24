<?php

namespace App\Http\Controllers;

use App\Models\userpayment;
use Illuminate\Http\Request;

class UserPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userpayment = userpayment ::all();
        return view('userpayment.index', ['userpayment' => $userpayment]);
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
     * @param  \App\Models\userpayment  $userpayment
     * @return \Illuminate\Http\Response
     */
    public function show(userpayment $userpayment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\userpayment  $userpayment
     * @return \Illuminate\Http\Response
     */
    public function edit(userpayment $userpayment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\userpayment  $userpayment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, userpayment $userpayment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\userpayment  $userpayment
     * @return \Illuminate\Http\Response
     */
    public function destroy(userpayment $userpayment)
    {
        //
    }
}
