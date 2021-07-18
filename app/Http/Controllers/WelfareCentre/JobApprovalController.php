<?php

namespace App\Http\Controllers\WelfareCentre;

use App\Http\Controllers\Controller;
use App\JobPost;
use Illuminate\Contracts\Queue\Job;
use Illuminate\Http\Request;

class  JobApprovalController extends Controller
{
    public function NewJobPost(){
        $new_jobs = JobPost::orderby('id', 'DESC')->get();
        return view('WelfareCentre.JobApproval.newJobs.newJobPosts', compact('new_jobs'));
    }

    public function NewJobPostShow($id){
        $new_job = JobPost::FindOrFail($id);
        return view('WelfareCentre.JobApproval.newJobs.newJobPostsShow', compact('new_job'));
    }
    public function EditJobPost($id){
        $new_job = JobPost::FindOrFail($id);
        return view('WelfareCentre.JobApproval.newJobs.EditJobPost', compact('new_job'));
    }
    public function postUpdate(Request $req){
        // return $req;
        $new_job = JobPost::FindOrFail($req->id);
        $new_job->appointment_date = $req->appointment_date;
        $new_job->appointment_time = $req->appointment_time;
        $new_job->status = $req->job_post_status;
        $new_job->save();
        return $this->NewJobPost();
    }
    public function jobApproved(){
        $new_jobs = JobPost::orderby('id', 'DESC')->where('status', 'approved')->get();
        return view('WelfareCentre.JobApproval.JobsApproved.jobApproved', compact('new_jobs'));
    }
}
