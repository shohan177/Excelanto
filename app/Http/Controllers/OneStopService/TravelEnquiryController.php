<?php

namespace App\Http\Controllers\OneStopService;

use App\Http\Controllers\Controller;
use App\OfferedCandidate;
use Illuminate\Http\Request;

class TravelEnquiryController extends Controller
{
    public function readyToTravel(){
        $offeredCandidates = OfferedCandidate::where('result_status', 
        'Visa-Stamping-Approved')->orderBy('id','DESC')->get();
        return view('OneStopService.travelEnquiry.readyToTravel', compact('offeredCandidates'));
    }

    public function newTravel(){
        return view('OneStopService.travelEnquiry.newTravel');
    }

    public function postedTravel(){
        return view('OneStopService.travelEnquiry.postedTravel');
    }

    public function showVisaStampingApprovedCandidate($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('OneStopService.travelEnquiry.show-visa-stamping-approved-candidate', compact('offeredCandidate'));
    }
}
