<?php

namespace App\Http\Controllers\BiometricAgencies;

use App\Candidate;
use App\Http\Controllers\Controller;
use App\OfferedCandidate;
use App\User;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use Illuminate\Support\Facades\Auth;

class CandidateController extends Controller
{
    public function new(){
        $offeredCandidates = OfferedCandidate::where('post_medical_status', 'New')->where('result_status', 'Post-Processing')->where('selected_osc_id', Auth::user()->id )->orderBy('id','DESC')->get();
        // $offeredCandidates = OfferedCandidate::whereIn('result_status', ['Selected','Assigned'])->orderBy('id','DESC')->get();
        return view('BiometricAgencies.candidate.new', compact('offeredCandidates'));

    }

    public function reported(){
        $offeredCandidates = OfferedCandidate::where('post_medical_status', 'New')->where('result_status', 'Post-Processing')->where('bio_status', '!=', 'new')->where('selected_osc_id', Auth::user()->id )->orderBy('id','DESC')->get();
        return view('BiometricAgencies.candidate.reported', compact('offeredCandidates'));
    }
}
