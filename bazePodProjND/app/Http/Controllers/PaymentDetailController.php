<?php

namespace App\Http\Controllers;

use App\Models\paymentdetail;
use Illuminate\Http\Request;

class PaymentDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paymentdetail = paymentdetail::all();
        return view('paymentdetail.index', ['paymentdetail' => $paymentdetail]);
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
     * @param  \App\Models\paymentdetail  $paymentdetail
     * @return \Illuminate\Http\Response
     */
    public function show(paymentdetail $paymentdetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\paymentdetail  $paymentdetail
     * @return \Illuminate\Http\Response
     */
    public function edit(paymentdetail $paymentdetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\paymentdetail  $paymentdetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, paymentdetail $paymentdetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\paymentdetail  $paymentdetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(paymentdetail $paymentdetail)
    {
        //
    }
}
