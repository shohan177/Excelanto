<?php

namespace App\Http\Controllers\WelfareCentre;

use App\Http\Controllers\Controller;
use App\OfferedCandidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class  TravelCandidatesController extends Controller
{
    public function readyToTravel(){
        $offeredCandidates = OfferedCandidate::where('welfare_center_id', Auth::user()->id)->whereIn('travel_status',['Activated','Forwarded'])->orderBy('id','DESC')->get();
        return view('WelfareCentre.TravelCandidates.ready', compact('offeredCandidates'));
    }

    public function showReceivedCandidate($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrfail($offered_candidate_id);
        return view('WelfareCentre.TravelCandidates.show-received-candidate', compact('offeredCandidate'));
    }
}
