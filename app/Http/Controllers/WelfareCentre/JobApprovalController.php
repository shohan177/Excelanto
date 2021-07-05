<?php

namespace App\Http\Controllers\WelfareCentre;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class  JobApprovalController extends Controller
{
    public function NewJobPost(){
        return view('WelfareCentre.JobApproval.newJobs.newJobPosts');
    }
    public function jobApproved(){
        return view('WelfareCentre.JobApproval.JobsApproved.jobApproved');
    }
}
