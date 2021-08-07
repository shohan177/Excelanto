<?php

namespace App\Http\Controllers\OneStopService_Child;

use App\Candidate;
use App\Http\Controllers\Controller;
use App\OfferedCandidate;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\React;

class CandidateController extends Controller
{
    public function selected()
    {
        $offeredCandidates = OfferedCandidate::where('result_status', 'Assigned')
                                             ->where('selected_osc_id', Auth::user()->id)
                                             ->orderBy('id', 'DESC')->get();
        return view('OneStopService_Child.candidate.selected', compact('offeredCandidates'));
    }

    public function interview()
    {
        return view('OneStopService_Child.candidate.interview');
    }

    public function finalized()
    {
        return view('OneStopService_Child.candidate.finalized');
    }
}
