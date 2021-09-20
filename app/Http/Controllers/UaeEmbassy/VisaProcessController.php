<?php

namespace App\Http\Controllers\UaeEmbassy;

use App\Http\Controllers\Controller;
use App\OfferedCandidate;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;

class VisaProcessController extends Controller
{
    public function stampingRequested()
    {
        $offeredCandidates = OfferedCandidate::where('result_status', 'Visa-Stamping-Request')->orderBy('id', 'DESC')->get();
        return view('UaeEmbassy.VisaProcess.stamping_requested', compact('offeredCandidates'));
    }
    public function stampingApproved()
    {
        $offeredCandidates = OfferedCandidate::where('result_status', 'Visa-Stamping-Approved')->orderBy('id', 'DESC')->get();
        return view('UaeEmbassy.VisaProcess.stamping_approved', compact('offeredCandidates'));
    }
    public function stampingRejected()
    {
        $offeredCandidates = OfferedCandidate::where('result_status', 'Visa-Stamping-Rejected')->orderBy('id', 'DESC')->get();
        return view('UaeEmbassy.VisaProcess.stamping_rejected', compact('offeredCandidates'));
    }

    public function requestedCandidateProfile($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('UaeEmbassy.VisaProcess.requested-candidate-profile', compact('offeredCandidate'));
    }

    public function approvedCandidateProfile($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('UaeEmbassy.VisaProcess.approved-candidate-profile', compact('offeredCandidate'));
    }

    public function rejectedCandidateProfile($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('UaeEmbassy.VisaProcess.rejected-candidate-profile', compact('offeredCandidate'));
    }
}
