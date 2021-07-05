<?php

namespace App\Http\Controllers\WelfareCentre;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class  TravelCandidatesController extends Controller
{
    public function TravelCandidates(){
        return view('WelfareCentre.TravelCandidates.ready');
    }
    public function jobApproved(){
        return view('WelfareCentre.JobApproval.JobsApproved.jobApproved');
    }
}
