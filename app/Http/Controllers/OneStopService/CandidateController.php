<?php

namespace App\Http\Controllers\OneStopService;

use App\Candidate;
use App\Http\Controllers\Controller;
use App\OfferedCandidate;
use App\User;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class CandidateController extends Controller
{
    public function selected(){
        $offeredCandidates = OfferedCandidate::whereIn('result_status', ['Selected','Assigned'])->orderBy('id','DESC')->get();
        return view('OneStopService.candidate.selected', compact('offeredCandidates'));
    }

    public function interview(){
        return view('OneStopService.candidate.interview');
    }

    public function finalized(){
        return view('OneStopService.candidate.finalized');
    }

    public function ticketBooked(){
        return view('OneStopService.candidate.ticketBooked');
    }

    public function showReviewedCandidate($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrfail($offered_candidate_id);
        $candidate = Candidate::findOrFail($offeredCandidate->candidate_id);
        return view('OneStopService.candidate.show-candidate', compact('offeredCandidate','candidate'));
    }

    public function assignSelectedCandidate($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrfail($offered_candidate_id);
        $candidate = Candidate::findOrFail($offeredCandidate->candidate_id);
        $wscList = User::where('user_type','one-stop-service-agency')->where('active_status','Approved')->orderBy('id','DESC')->get();
        return view('OneStopService.candidate.assign-selected-candidate', compact('candidate','offeredCandidate','wscList'));
    }

    public function assignSelectedCandidateStore(Request $request , $offered_candidate_id){
        $request->validate([
            'fees' =>  'required',
            'wsc' =>  'required',
        ]);
        $offeredCandidate = OfferedCandidate::findOrfail($offered_candidate_id);
        $offeredCandidate->result_status = 'Assigned';
        $offeredCandidate->selected_osc_id = $request->wsc;
        $offeredCandidate->payment_assigned = $request->fees;

        try {
            $offeredCandidate->save();
            return back()->withToastSuccess('Successfully saved.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }

    }
}
