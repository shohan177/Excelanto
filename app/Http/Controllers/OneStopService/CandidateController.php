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
        $offeredCandidates = OfferedCandidate::whereIn('result_status', ['Interview','Updated','Under-Interview-Process'])->orderBy('id','DESC')->get();
        return view('OneStopService.candidate.interview', compact('offeredCandidates'));
    }

    public function finalized(){
        $offeredCandidates = OfferedCandidate::where('result_status',
        'Finalized')->orderBy('id','DESC')->get();
        return view('OneStopService.candidate.finalized', compact('offeredCandidates'));
    }

    public function ticketBooked(){
        $offeredCandidates = OfferedCandidate::whereIn('travel_status', ['Activated','Forwarded','Ticket-Issued'])->orderBy('id','DESC')->get();
        return view('OneStopService.candidate.ticketBooked', compact('offeredCandidates'));
    }

    public function showReviewedCandidate($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrfail($offered_candidate_id);
        $candidate = Candidate::findOrFail($offeredCandidate->candidate_id);
        return view('OneStopService.candidate.show-candidate', compact('offeredCandidate','candidate'));
    }

    public function showFinalCandidate($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrfail($offered_candidate_id);
        $candidate = Candidate::findOrFail($offeredCandidate->candidate_id);
        return view('OneStopService.candidate.show-final-candidate', compact('offeredCandidate','candidate'));
    }

    public function showBookedCandidate($offered_candidate_id)
    {
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('OneStopService.candidate.show-booked-candidate', compact('offeredCandidate'));
    }

    public function assignSelectedCandidate($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrfail($offered_candidate_id);
        $candidate = Candidate::findOrFail($offeredCandidate->candidate_id);
        $wscList = User::where('user_type','child-one-stop-service')->where('active_status','Approved')->orderBy('id','DESC')->get();
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

    public function assignInterviewOsc($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrfail($offered_candidate_id);
        $candidate = Candidate::findOrFail($offeredCandidate->candidate_id);
        $wscList = User::where('user_type','child-one-stop-service')->where('active_status','Approved')->orderBy('id','DESC')->get();
        return view('OneStopService.candidate.assign-interview-osc', compact('candidate','offeredCandidate','wscList'));
    }

    public function assignInterviewOscStore(Request $request , $offered_candidate_id){
        $request->validate([
            'wsc' =>  'required',
        ]);
        $offeredCandidate = OfferedCandidate::findOrfail($offered_candidate_id);
        $offeredCandidate->result_status = 'Under-Interview-Process';
        $offeredCandidate->interview_osc_id = $request->wsc;

        try {
            $offeredCandidate->save();
            return back()->withToastSuccess('Successfully saved.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }

    public function requestToVisa($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        $offeredCandidate->result_status = "Visa-Requested";
        try {
            $offeredCandidate->save();
            return response()->json([
                'type' => 'success',
                'message' => 'Successfully Stored'
            ]);
        }catch (\Exception $exception){
            return response()->json([
                'type' => 'error',
                'message' => $exception->getMessage()
            ]);
        }
    }
}
