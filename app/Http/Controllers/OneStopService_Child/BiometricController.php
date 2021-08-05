<?php

namespace App\Http\Controllers\OneStopService_Child;

use App\Candidate;
use App\Http\Controllers\Controller;
use App\OfferedCandidate;
use App\User;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class BiometricController extends Controller
{
    public function required(){
        $offeredCandidates = OfferedCandidate::whereIn('result_status', ['Selected','Assigned'])->orderBy('id','DESC')->get();
        return view('OneStopService_Child.Biometric.required', compact('offeredCandidates'));
    }

    public function completed(){
        return view('OneStopService_Child.Biometric.completed');
    }



}
