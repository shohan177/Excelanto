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
        return view('EmployerCompany.VisaProcess.visa_requested');
    }

    public function visa_approved(){
        return view('EmployerCompany.VisaProcess.visa_approved');
    }

    public function visa_rejected(){
        return view('EmployerCompany.VisaProcess.visa_rejected');
    }

    public function showVisaRequiredCandidate($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('EmployerCompany.VisaProcess.show-visa-required-candidate', compact('offeredCandidate'));
    }
}
