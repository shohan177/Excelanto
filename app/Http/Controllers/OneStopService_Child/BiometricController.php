<?php

namespace App\Http\Controllers\OneStopService_Child;

use App\Candidate;
use App\Http\Controllers\Controller;
use App\OfferedCandidate;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\React;

class BiometricController extends Controller
{
    public function required(){
        $offeredCandidates = OfferedCandidate::where('result_status', 'Recommended')
                                             ->where('selected_osc_id', Auth::user()->id)
                                             ->orderBy('id','DESC')->get();
        return view('OneStopService_Child.biometric.required', compact('offeredCandidates'));
    }

    public function completed(){
        return view('OneStopService_Child.biometric.completed');
    }

    public function showPaidCandidateProfile($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('OneStopService_Child.biometric.show-paid-candidate-profile', compact('offeredCandidate'));
    }



}
