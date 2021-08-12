<?php

namespace App\Http\Controllers\OneStopService;

use App\Http\Controllers\Controller;
use App\OfferedCandidate;
use Illuminate\Http\Request;

class VisaProcessController extends Controller
{
    public function approved(){
        $offeredCandidates = OfferedCandidate::where('result_status', 
        'Visa-Approved')->orderBy('id','DESC')->get();
        return view('OneStopService.visa.approved', compact('offeredCandidates'));
    }

    public function rejected(){
        $offeredCandidates = OfferedCandidate::where('result_status', 
        'Visa-Rejected')->orderBy('id','DESC')->get();
        return view('OneStopService.visa.rejected', compact('offeredCandidates'));
    }

    public function showVisaApprovedCandidate($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('OneStopService.visa.show-visa-approved-candidate', compact('offeredCandidate'));
    }

    public function showVisaRejectedCandidate($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('OneStopService.visa.show-visa-rejected-candidate', compact('offeredCandidate'));
    }
}
