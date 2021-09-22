<?php

namespace App\Http\Controllers\BiometricAgencies;

use App\Candidate;
use App\Http\Controllers\Controller;
use App\OfferedCandidate;
use App\User;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

class CandidateController extends Controller
{
    public function new(){
        $offeredCandidates = OfferedCandidate::where('result_status', 'Recommended')
                            ->where('post_biometric_id', Auth::user()->id)
                            ->orderBy('id','DESC')->get();
        return view('BiometricAgencies.candidate.new', compact('offeredCandidates'));
    }

    public function reported(){
        $offeredCandidates = OfferedCandidate::where('bio_status', 'Success')
                            ->where('post_biometric_id', Auth::user()->id)
                            ->orderBy('id','DESC')->get();
        return view('BiometricAgencies.candidate.reported', compact('offeredCandidates'));
    }

    public function showCandidateProfile($offered_candidate_id)
    {
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('BiometricAgencies.candidate.show-candidate-profile', compact('offeredCandidate'));
    }

    public function uploadBiometric($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('BiometricAgencies.candidate.upload-biometric', compact('offeredCandidate'));
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
}
