<?php

namespace App\Http\Controllers\BiometricAgencies;

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
        return view('BiometricAgencies.candidate.new', compact('offeredCandidates'));
    }

    public function reported(){
        return view('BiometricAgencies.candidate.reported');
    }
}
