<?php

namespace App\Http\Controllers\OneStopService_Child;

use App\Candidate;
use App\Http\Controllers\Controller;
use App\OfferedCandidate;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\React;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

class BiometricController extends Controller
{
    public function required(){
        $offeredCandidates = OfferedCandidate::where('result_status', 'Recommended')
                                             ->where('selected_osc_id', Auth::user()->id)
                                             ->where('post_biometric_id', null)
                                             ->orderBy('id','DESC')->get();
        return view('OneStopService_Child.biometric.required', compact('offeredCandidates'));
    }

    public function completed(){
        $offeredCandidates = OfferedCandidate::whereIn('result_status', ['Bio-Completed','Post-Processing'])
                                             ->where('selected_osc_id', Auth::user()->id)
                                             ->orderBy('id','DESC')->get();
        return view('OneStopService_Child.biometric.completed', compact('offeredCandidates'));
    }

    public function showPaidCandidateProfile($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('OneStopService_Child.biometric.show-paid-candidate-profile', compact('offeredCandidate'));
    }

    public function uploadBiometric($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('OneStopService_Child.biometric.upload-biometric', compact('offeredCandidate'));
    }

    public function assignBiometricAgency($offered_candidate_id){
        $biometricAgencies = User::where('user_type','biometric-agency')
                                    ->where('active_status', 'Approved')
                                    ->orderBy('id','DESC')->get();
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('OneStopService_Child.biometric.assign-biometric-agency', compact('offeredCandidate','biometricAgencies'));
    }

    public function assignBiometricAgencyStore(Request $request, $offered_candidate_id)
    {
        $request->validate([
            'biometricCenter' => 'required',
            'biometricFees' => 'required',
        ]);
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        $offeredCandidate->biometric_fee = $request->biometricFees;
        $offeredCandidate->post_biometric_id = $request->biometricCenter;
        try {
            $offeredCandidate->save();
            return back()->withToastSuccess('Successfully saved.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }

    public function assignMedicalTraining($offered_candidate_id){
        $medicalAgencies = User::where('user_type','medical-agency')
                                ->where('active_status', 'Approved')
                                ->orderBy('id','DESC')->get();
        $trainingAgencies = User::where('user_type','training-agency')
                                ->where('active_status', 'Approved')
                                ->orderBy('id','DESC')->get();
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('OneStopService_Child.biometric.assign-medical-training', compact('offeredCandidate','trainingAgencies','medicalAgencies'));
    }

    public function uploadBiometricStore(Request $request, $offered_candidate_id)
    {
        $request->validate([
            'biometric' =>'mimes:pdf',
        ]);

        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        $offeredCandidate->result_status = 'Bio-Completed';
        $offeredCandidate->biometric_fee = $request->biometricFees;
        $offeredCandidate->bio_status = 'Success';

        if ($request->hasFile('biometric')) {
            $pdf             = $request->file('biometric');
            $folder_path       = 'uploads/biometric/';
            $pdf_new_name    = Str::random(20) . '-' . now()->timestamp . '.' . $pdf->getClientOriginalExtension();
            // save to server
            $request->biometric->move(public_path($folder_path), $pdf_new_name);
            $offeredCandidate->bio_report   = $folder_path . $pdf_new_name;
        }
        try {
            $offeredCandidate->save();
            return back()->withToastSuccess('Successfully saved.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }

    public function assignMedicalTrainingStore(Request $request, $offered_candidate_id)
    {
        $request->validate([
            'medicalCenter' => 'required',
            'trainingCenter' => 'required',
        ]);
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        $offeredCandidate->result_status = 'Post-Processing';
        $offeredCandidate->training_fee = $request->trainingFees;
        $offeredCandidate->medical_fee = $request->medicalFees;
        $offeredCandidate->post_medical_id = $request->medicalCenter;
        $offeredCandidate->post_training_id = $request->trainingCenter;

        try {
            $offeredCandidate->save();
            return back()->withToastSuccess('Successfully saved.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }



}
