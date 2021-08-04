<?php

namespace App\Http\Controllers\MedicalAgency;

use App\Candidate;
use App\Http\Controllers\Controller;
use App\OfferedCandidate;
use App\User;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class CandidateController extends Controller
{
    public function new(){
        $offeredCandidates = OfferedCandidate::whereIn('result_status', ['Selected','Assigned'])->orderBy('id','DESC')->get();
        return view('MedicalAgency.candidate.new', compact('offeredCandidates'));
    }

    public function reported(){
        return view('MedicalAgency.candidate.reported');
    }
}
