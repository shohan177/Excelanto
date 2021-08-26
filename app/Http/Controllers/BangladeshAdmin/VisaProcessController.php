<?php

namespace App\Http\Controllers\BangladeshAdmin;

use App\VisaProcess;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\OfferedCandidate;

class VisaProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function requests()
    {
        $offeredCandidates = OfferedCandidate::where('result_status','Visa-Applied')->orderBy('id', 'DESC')->get();
        return view('BangladeshAdmin.visaProcess.requests', compact('offeredCandidates'));
    }

    public function visaRequestCandidate($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('BangladeshAdmin.visaProcess.visa-request-candidate', compact('offeredCandidate'));
    }

    public function visaApprovedCandidate($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('BangladeshAdmin.visaProcess.visa-approved-candidate', compact('offeredCandidate'));
    }

    public function visaRejectedCandidate($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('BangladeshAdmin.visaProcess.visa-rejected-candidate', compact('offeredCandidate'));
    }
    public function approved()
    {
        $offeredCandidates = OfferedCandidate::where('result_status','Visa-Approved')->orderBy('id', 'DESC')->get();
        return view('BangladeshAdmin.visaProcess.approved', compact('offeredCandidates'));
    }
    public function rejected()
    {
        $offeredCandidates = OfferedCandidate::where('result_status','Visa-Rejected')->orderBy('id', 'DESC')->get();
        return view('BangladeshAdmin.visaProcess.rejected', compact('offeredCandidates'));
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
