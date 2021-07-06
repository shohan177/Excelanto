<?php

namespace App\Http\Controllers\EmployerCompany;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function new_candidates(){
        return view('EmployerCompany.candidate.new_candidates');
    }
    public function candidates_result(){
        return view('EmployerCompany.candidate.candidates_result');
    }
    public function finalized_candidates(){
        return view('EmployerCompany.candidate.finalized_candidates');
    }
    public function tickets_booked_list(){
        return view('EmployerCompany.candidate.tickets_booked_list');
    }
}
