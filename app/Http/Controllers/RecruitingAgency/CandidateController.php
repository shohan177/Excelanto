<?php

namespace App\Http\Controllers\RecruitingAgency;

use App\AppliedJob;
use App\Candidate;
use App\Http\Controllers\Controller;
use App\JobCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;

class CandidateController extends Controller
{
    public function new(){
        $jobCategories = JobCategory::where('status','active')->orderBy('id','DESC')->get();
        return view('RecruitingAgency.candidate.new', compact('jobCategories'));
    }

    public function all(){
        $candidates = Candidate::where('created_id', Auth::user()->id)->orderBy('id','DESC')->get();
        return view('RecruitingAgency.candidate.all', compact('candidates'));
    }

    public function show($id){
        $candidate = Candidate::findOrFail($id);
        return view('RecruitingAgency.candidate.show', compact('candidate'));
    }

    public function selected(){
        $selectedCandidates = AppliedJob::where('applier_id', Auth::user()->id)->orderBy('id','DESC')->get();
        return view('RecruitingAgency.candidate.selected', compact('selectedCandidates'));
    }

    public function viewSelected($id){
        $CandidatesList = Candidate::where('job_id', $id)->orderBy('id','DESC')->get();
        return view('RecruitingAgency.candidate.viewSelected', compact('CandidatesList'));
    }

    public function store(Request $request){
        // return $request;
        $request->validate([
            'candidateName' => ['required', 'string', 'max:255'],
            'jobCategory' =>  'required',
            'dateOfBirth' =>  'required',
            'gender' => 'required',
            'passportNo' => 'required',
            'phoneNo' => 'required',
            'email' =>  'email',
            'status' =>  'required'
        ]);

        // return $request;


        $candidate = new Candidate();
        $candidate->candidate_name    =   $request->candidateName;
        $candidate->role_id    = 15;
        $candidate->job_category_id    = $request->jobCategory;
        $candidate->candidate_dob    = $request->dateOfBirth;
        $candidate->candidate_gender    = $request->gender;
        $candidate->passport_number    = $request->passportNo;
        $candidate->phone_number    = $request->phoneNo;
        $candidate->candidate_email    = $request->email;
        $candidate->status    = $request->status == 'Active' ? 1 : 0;
        $candidate->nationality    = $request->nationality;
        $candidate->present_address    = $request->presentAddress;
        $candidate->permanent_address    = $request->permanentAddress;
        $candidate->created_id    = Auth::user()->id;
        $candidate->created_at    = Carbon::now();


        if ($request->hasFile('photo')) {
            $image             = $request->file('photo');
            $folder_path       = 'uploads/candidate/';
            $image_new_name    = Str::random(20) . '-' . now()->timestamp . '.' . $image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path . $image_new_name);
            $candidate->candidate_picture   = $folder_path . $image_new_name;
        }

        if ($request->hasFile('bioData')) {
            $image             = $request->file('bioData');
            $folder_path       = 'uploads/candidate/';
            $image_new_name    = Str::random(20) . '-' . now()->timestamp . '.' . $image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path . $image_new_name);
            $candidate->candidate_resume   = $folder_path . $image_new_name;
        }

        if ($request->hasFile('passport')) {
            $image             = $request->file('passport');
            $folder_path       = 'uploads/candidate/';
            $image_new_name    = Str::random(20) . '-' . now()->timestamp . '.' . $image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path . $image_new_name);
            $candidate->passport   = $folder_path . $image_new_name;
        }

        if ($request->hasFile('preMedicalCertificate')) {
            $image             = $request->file('preMedicalCertificate');
            $folder_path       = 'uploads/candidate/';
            $image_new_name    = Str::random(20) . '-' . now()->timestamp . '.' . $image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path . $image_new_name);
            $candidate->pre_medical_certificate   = $folder_path . $image_new_name;
        }

        if ($request->hasFile('preTrainingCertificate')) {
            $image             = $request->file('preTrainingCertificate');
            $folder_path       = 'uploads/candidate/';
            $image_new_name    = Str::random(20) . '-' . now()->timestamp . '.' . $image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path . $image_new_name);
            $candidate->pre_traning_certificate   = $folder_path . $image_new_name;
        }


        try {
            $candidate->save();
            return back()->withToastSuccess('Successfully saved.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }

    public function approveNow($id){
        $candidate = Candidate::findOrFail($id);
        $candidate->status = "Selected";
        try {
            $candidate->save();
            return response()->json([
                'type' => 'success',
                'message' => 'Successfully Stored'
            ]);
        }catch (\Exception $exception){
            return response()->json([
                'type' => 'error',
                'message' => $exception->getMessage()
            ]);
        }
    }

    public function rejectNow($id){
        $candidate = Candidate::findOrFail($id);
        $candidate->status = "Active";
        try {
            $candidate->save();
            return response()->json([
                'type' => 'success',
                'message' => 'Successfully Stored'
            ]);
        }catch (\Exception $exception){
            return response()->json([
                'type' => 'error',
                'message' => $exception->getMessage()
            ]);
        }
    }
}
