<?php

namespace App\Http\Controllers\EmployerCompany;

use App\AppliedJob;
use App\Candidate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function new_candidates(){
        $appliedJobs = AppliedJob::where('status','Approved')->get();
        return view('EmployerCompany.candidate.new_candidates', compact('appliedJobs'));
    }
    public function newCandidateList($applied_job_id){
        $appliedJob = AppliedJob::findOrFail($applied_job_id);
        $candidates = Candidate::where('job_category_id',$appliedJob->jobPost->job_category->id)
                               ->where('created_id',$appliedJob->applier_id)
                               ->where('status','Forwarded')
                               ->get();
        return view('EmployerCompany.candidate.new-candidate-list', compact('candidates'));
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
    public function show($id){
        $candidate = Candidate::findOrFail($id);
        return view('EmployerCompany.candidate.show', compact('candidate'));
    }
}
