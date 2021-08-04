<?php

namespace App\Http\Controllers\EmployerCompany;

use App\Http\Controllers\Controller;
use App\OfferedCandidate;
use Illuminate\Http\Request;

class VisaProcessController extends Controller
{
    public function visa_required(){
        $offeredCandidates = OfferedCandidate::where('result_status','Visa-Requested')->orderBy('id', 'DESC')->get();
        return view('EmployerCompany.VisaProcess.visa_required', compact('offeredCandidates'));
    }
    public function visa_requested(){
        $offeredCandidates = OfferedCandidate::where('result_status','Visa-Applied')->orderBy('id', 'DESC')->get();
        return view('EmployerCompany.VisaProcess.visa_requested', compact('offeredCandidates'));
    }

    public function visa_approved(){
        $offeredCandidates = OfferedCandidate::where('result_status','Visa-Approved')->orderBy('id', 'DESC')->get();
        return view('EmployerCompany.VisaProcess.visa_approved', compact('offeredCandidates'));
    }

    public function visa_rejected(){
        $offeredCandidates = OfferedCandidate::where('result_status','Visa-Rejected')->orderBy('id', 'DESC')->get();
        return view('EmployerCompany.VisaProcess.visa_rejected', compact('offeredCandidates'));
    }

    public function showVisaRequiredCandidate($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('EmployerCompany.VisaProcess.show-visa-required-candidate', compact('offeredCandidate'));
    }

    public function showVisaRequestedCandidate($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('EmployerCompany.VisaProcess.show-visa-requested-candidate', compact('offeredCandidate'));
    }

    public function showVisaApprovedCandidate($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('EmployerCompany.VisaProcess.show-visa-approved-candidate', compact('offeredCandidate'));
    }

    public function showVisaRejectedCandidate($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('EmployerCompany.VisaProcess.show-visa-rejected-candidate', compact('offeredCandidate'));
    }
}
