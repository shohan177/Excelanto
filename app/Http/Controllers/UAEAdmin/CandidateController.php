<?php

namespace App\Http\Controllers\UAEAdmin;

use App\Http\Controllers\Controller;
use App\OfferedCandidate;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function travelReceived()
    {
        $offeredCandidates = OfferedCandidate::whereIn('travel_status', ['Activated', 'Forwarded'])->orderBy('id', 'DESC')->get();
        return view('UAEAdmin.candidate.travel-received', compact('offeredCandidates'));
    }

    public function travelCandidateProfile($offered_candidate_id)
    {
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('UAEAdmin.candidate.show-travel-candidate', compact('offeredCandidate'));
    }
}
