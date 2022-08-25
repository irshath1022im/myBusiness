<?php

namespace App\Http\Controllers;

use App\Models\VisaHolder;
use Illuminate\Http\Request;

class VisaHolderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $result = VisaHolder::with('visa_assignment')->get();
        return view('visa_holders.index', ['visa_holders' => $result]);
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
     * @param  \App\Models\VisaHolder  $visaHolder
     * @return \Illuminate\Http\Response
     */
    public function show(VisaHolder $visaHolder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VisaHolder  $visaHolder
     * @return \Illuminate\Http\Response
     */
    public function edit(VisaHolder $visaHolder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VisaHolder  $visaHolder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VisaHolder $visaHolder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VisaHolder  $visaHolder
     * @return \Illuminate\Http\Response
     */
    public function destroy(VisaHolder $visaHolder)
    {
        //
    }
}
