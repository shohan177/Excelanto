<?php

namespace App\Http\Controllers\BangladeshEmbassy;

use App\Candidate as AppCandidate;
use App\Http\Controllers\Controller;
use App\Candidate;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function showCandidateProfile($candidate_id){
        $candidate =   Candidate::findOrFail($candidate_id);
        $offeredCandidate = $candidate->offered_candidate;
        return view('BangladeshEmbassy.candidate.showCandidateProfile', compact('candidate','offeredCandidate'));
    }
}
