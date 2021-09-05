<?php

namespace App\Http\Controllers\MedicalAgency;

use App\Candidate;
use App\Http\Controllers\Controller;
use App\OfferedCandidate;
use App\User;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class CandidateController extends Controller
{
    public function new(){
        $offeredCandidates = OfferedCandidate::where('post_medical_id', Auth::user()->id)->where('result_status', 'Post-Processing')->where('post_medical_id', Auth::user()->id )->orderBy('id','DESC')->get();
        return view('MedicalAgency.candidate.new', compact('offeredCandidates'));
    }

    public function show($id){
         $offeredCandidate = OfferedCandidate::findOrFail($id);
        return view('MedicalAgency.candidate.show-profile', compact('offeredCandidate'));
    }


    public function post_medical_report($id){
        $offeredCandidate = OfferedCandidate::findOrFail($id);

        return view('MedicalAgency.candidate.post_medical_report', compact('offeredCandidate'));
    }

    public function  add_medical_report(Request $request, $id){
        // return $request;
        $offeredCandidate = OfferedCandidate::findOrFail($id);
        $offeredCandidate->post_medical_status = $request->post_medical_status;
        $offeredCandidate->post_medical_comments = $request->post_medical_comments;

        if ($request->hasFile('post_medical_report')) {
            $image             = $request->file('post_medical_report');
            $folder_path       = 'uploads/candidate/post_medical_report/';
            $image_new_name    = Str::random(20) . '-' . now()->timestamp . '.' . $image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path . $image_new_name);
            $offeredCandidate->post_medical_report   = $folder_path . $image_new_name;
        }

        try {
            $offeredCandidate->save();
            return back()->withToastSuccess('Successfully saved.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }

    public function reported(){
        $offeredCandidates = OfferedCandidate::where('post_medical_status', '!=', 'New')->where('post_medical_id', Auth::user()->id )->orderBy('id','DESC')->get();
        return view('MedicalAgency.candidate.reported', compact('offeredCandidates'));
    }
}
