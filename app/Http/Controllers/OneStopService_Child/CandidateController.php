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
        $offeredCandidates = OfferedCandidate::where('result_status', 'Under-Interview-Proces')
                                             ->where('interview_osc_id', Auth::user()->id)
                                             ->orderBy('id', 'DESC')->get();
        return view('OneStopService_Child.candidate.interview', compact('offeredCandidates'));
    }

    public function finalized()
    {
        $offeredCandidates = OfferedCandidate::whereIn('result_status', ['Post-Processing','Finalized'])
                                             ->where('selected_osc_id', Auth::user()->id)
                                             ->orderBy('id', 'DESC')->get();
        return view('OneStopService_Child.candidate.finalized', compact('offeredCandidates'));
    }

    public function showCandidateProfile($offered_candidate_id)
    {
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('OneStopService_Child.candidate.show-candidate-profile', compact('offeredCandidate'));
    }

    public function showFinalCandidateProfile($offered_candidate_id)
    {
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('OneStopService_Child.candidate.show-final-candidate-profile', compact('offeredCandidate'));
    }

    public function showBiometricCandidateProfile($offered_candidate_id)
    {
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('OneStopService_Child.candidate.show-biometric-candidate-profile', compact('offeredCandidate'));
    }

    public function initialPayment($offered_candidate_id)
    {
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('OneStopService_Child.candidate.initial-payment', compact('offeredCandidate'));
    }

    public function interviewStatus($offered_candidate_id)
    {
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('OneStopService_Child.candidate.interview-status', compact('offeredCandidate'));
    }

    public function interviewStatusStore(Request $request, $offered_candidate_id)
    {
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        $offeredCandidate->select_result = $request->interviewResult;
        $offeredCandidate->result_status = 'Updated';
        try {
            $offeredCandidate->save();
            return back()->withToastSuccess('Successfully saved.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }
    public function initialPaymentStore(Request $request, $offered_candidate_id)
    {
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        $offeredCandidate->payment_method = $request->paymentMethod;
        $offeredCandidate->result_status = 'Recommended';
        try {
            $offeredCandidate->save();
            return back()->withToastSuccess('Successfully saved.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }

    public function candidateStatusChange($offered_candidate_id , $result_status)
    {
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        $status = 'Post-Processing';
        if ($result_status == 'Post-Processing') {
            $status = 'Finalized';
        }

        $offeredCandidate->result_status = $status;
        $offeredCandidate->active_status = $status;
        try {
            $offeredCandidate->save();
            return response()->json([
                'type' => 'success',
                'message' => 'Successfully Updated'
            ]);
        }catch (\Exception $exception){
            return response()->json([
                'type' => 'error',
                'message' => $exception->getMessage()
            ]);
        }
    }
}
