<?php

namespace App\Http\Controllers\RecruitingAgency;

use App\Http\Controllers\Controller;
use App\JobPost;
use Illuminate\Http\Request;

class JobPostController extends Controller
{
    public function all(){
        $jobPosts = JobPost::where('status','Approved')->get();
        return view('RecruitingAgency.jobPost.all', compact('jobPosts'));
    }

    public function applied(){
        return view('RecruitingAgency.jobPost.applied');
    }

    public function edit($id)
    {
        $jobPost = JobPost::findOrFail($id);
        return view('RecruitingAgency.PostJob.edit', compact('jobPost'));
    }

}
