<?php

namespace App\Http\Controllers\BangladeshAdmin;

use App\VisaProcess;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisaProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function requests()
    {
        return view('BangladeshAdmin.visaProcess.requests');
    }
    public function approved()
    {
        return view('BangladeshAdmin.visaProcess.approved');
    }
    public function rejected()
    {
        return view('BangladeshAdmin.visaProcess.rejected');
    }
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
     * @param  \App\VisaProcess  $visaProcess
     * @return \Illuminate\Http\Response
     */
    public function show(VisaProcess $visaProcess)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VisaProcess  $visaProcess
     * @return \Illuminate\Http\Response
     */
    public function edit(VisaProcess $visaProcess)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VisaProcess  $visaProcess
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VisaProcess $visaProcess)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VisaProcess  $visaProcess
     * @return \Illuminate\Http\Response
     */
    public function destroy(VisaProcess $visaProcess)
    {
        //
    }
}
