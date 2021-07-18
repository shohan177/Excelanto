<?php

namespace App\Http\Controllers\BangladeshEmbassy;

use App\Http\Controllers\Controller;
use App\JobPost;
use Illuminate\Http\Request;

class EmployerDemandController extends Controller
{
    public function received(){
        $job_posts = JobPost::where('status','Verified')->get();
        return view('BangladeshEmbassy.employerDemand.received',compact('job_posts'));
    }

    public function approved(){
        $job_posts = JobPost::where('status','Approved')->get();
        return view('BangladeshEmbassy.employerDemand.approved',compact('job_posts'));
    }

    public function rejected(){
        $job_posts = JobPost::where('status','Rejected')->get();
        return view('BangladeshEmbassy.employerDemand.rejected',compact('job_posts'));
    }

    public function show($id){

        $job_post = JobPost::findOrFail($id);
        return view('BangladeshEmbassy.employerDemand.show',compact('job_post'));
    }
}
