<?php

namespace App\Http\Controllers\OneStopService_Child;

use App\Http\Controllers\Controller;
use App\OfferedCandidate;
use Illuminate\Http\Request;

class VisaProcessController extends Controller
{
    public function requested(){
        $offeredCandidates = OfferedCandidate::where('result_status','Visa-Applied')->orderBy('id', 'DESC')->get();
        return view('OneStopService_Child.visa.requested', compact('offeredCandidates'));
    }
    public function approved(){
        $offeredCandidates = OfferedCandidate::where('result_status','Visa-Approved')->orderBy('id', 'DESC')->get();
        return view('OneStopService_Child.visa.approved', compact('offeredCandidates'));
    }

    public function rejected(){
        $offeredCandidates = OfferedCandidate::where('result_status','Visa-Rejected')->orderBy('id', 'DESC')->get();
        return view('OneStopService_Child.visa.rejected', compact('offeredCandidates'));
    }

    public function showVisaRequestedCandidate($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('OneStopService_Child.visa.show-visa-requested-candidate', compact('offeredCandidate'));
    }

    public function showVisaApprovedCandidate($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('OneStopService_Child.visa.show-visa-approved-candidate', compact('offeredCandidate'));
    }

    public function showVisaRejectedCandidate($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('OneStopService_Child.visa.show-visa-rejected-candidate', compact('offeredCandidate'));
    }
}
