<?php

namespace App\Http\Controllers\WelfareCentre;

use App\Http\Controllers\Controller;
use App\JobPost;
use Illuminate\Contracts\Queue\Job;
use Illuminate\Http\Request;

class  JobApprovalController extends Controller
{
    public function NewJobPost(){
        $new_jobs = JobPost::orderBy('id','DESC')->get();
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
        $new_job->appointment_date = $req->appointmentDate;
        $new_job->appointment_time = $req->appointmentTime;
        $new_job->status = $req->jobPostStatus;
        $new_job->rejection_reason = $req->reject_reason;
        $new_job->save();
        try {
            $new_job->save();
            return back()->withToastSuccess('Successfully saved.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }
    public function jobApproved(){
        $new_jobs = JobPost::where('status', 'Approved')->orderBy('id','DESC')->get();
        return view('WelfareCentre.JobApproval.JobsApproved.jobApproved', compact('new_jobs'));
    }
}
