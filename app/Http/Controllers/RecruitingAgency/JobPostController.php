<?php

namespace App\Http\Controllers\RecruitingAgency;

use App\Http\Controllers\Controller;
use App\JobPost;
use Carbon\Carbon;
use Illuminate\Http\Request;

class JobPostController extends Controller
{
    public function all(){
        $jobPosts = JobPost::where('status','Approved')->get();
        return view('RecruitingAgency.jobPost.all', compact('jobPosts'));
    }

    public function applied(){
        $jobPosts = JobPost::where('status','Applied')->get();
        return view('RecruitingAgency.jobPost.applied', compact('jobPosts'));
    }

    public function edit($id)
    {
        $jobPost = JobPost::findOrFail($id);
        return view('RecruitingAgency.jobPost.edit', compact('jobPost'));
    }

    public function show($id)
    {
        $jobPost = JobPost::findOrFail($id);
        return view('RecruitingAgency.jobPost.show', compact('jobPost'));
    }

    public function update(Request $request , $id){
        $job_post = JobPost::findOrFail($id);

        $job_post->applied_vacancy    =  $request->appliedVacancy;
        $job_post->remarks    =  $request->remarks;
        $job_post->applied_date    =  Carbon::now();
        $job_post->status    =  "Applied";

        try {
            $job_post->save();
            return back()->withToastSuccess('Successfully saved.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }

    public function selectCandidates($id)
    {
        $jobPost = JobPost::findOrFail($id);
        return view('RecruitingAgency.jobPost.show', compact('jobPost'));
    }

}
