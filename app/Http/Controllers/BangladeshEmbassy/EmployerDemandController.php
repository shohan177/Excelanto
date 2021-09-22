<?php

namespace App\Http\Controllers\BangladeshEmbassy;

use App\Http\Controllers\Controller;
use App\JobPost;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

class EmployerDemandController extends Controller
{
    public function received(){
        $job_posts = JobPost::where('status', ['Verified'])->orderBy('id','DESC')->get();
        return view('BangladeshEmbassy.employerDemand.received',compact('job_posts'));
    }

    public function approved(){
        $job_posts = JobPost::where('status','Approved')->orderBy('id','DESC')->get();
        return view('BangladeshEmbassy.employerDemand.approved',compact('job_posts'));
    }

    public function rejected(){
        $job_posts = JobPost::where('status','Rejected')->orderBy('id','DESC')->get();
        return view('BangladeshEmbassy.employerDemand.rejected',compact('job_posts'));
    }

    public function show($id){

        $job_post = JobPost::findOrFail($id);
        return view('BangladeshEmbassy.employerDemand.show',compact('job_post'));
    }

    public function edit($id){

        $job_post = JobPost::findOrFail($id);
        return view('BangladeshEmbassy.employerDemand.edit',compact('job_post'));
    }

    public function update(Request $request , $id){
        $request->validate([
            'demandLetter' => 'mimes:pdf',
        ]);

        $job_post = JobPost::findOrFail($id);

        $job_post->status    =   $request->jobPostStatus;
        $job_post->rejection_reason    =  $request->reasonToReject;

        if ($request->hasFile('demandLetter')) {
            $pdf             = $request->file('demandLetter');
            $folder_path       = 'uploads/demand-letter/';
            $pdf_new_name    = Str::random(20) . '-' . now()->timestamp . '.' . $pdf->getClientOriginalExtension();
            // save to server
            $request->demandLetter->move(public_path($folder_path), $pdf_new_name);
            $job_post->demand_letter   = $folder_path . $pdf_new_name;
        }

        try {
            $job_post->save();
            return back()->withToastSuccess('Successfully saved.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }
}
