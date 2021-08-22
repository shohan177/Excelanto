<?php

namespace App\Http\Controllers\UAEAdmin;

use App\Http\Controllers\Controller;
use App\OfferedCandidate;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

class VisaRequestController extends Controller
{
    public function requested(){
        $offeredCandidates = OfferedCandidate::where('result_status',
        'Visa-Applied')->orderBy('id','DESC')->get();
        return view('UAEAdmin.visa.requested', compact('offeredCandidates'));
    }

    public function approved(){
        return view('UAEAdmin.visa.approved');
    }

    public function rejected(){
        return view('UAEAdmin.visa.rejected');
    }

    public function showVisaApprovedCandidate($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('UAEAdmin.visa.show-visa-approved-candidate', compact('offeredCandidate'));
    }

    public function showVisaAppliedCandidate($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('UAEAdmin.visa.show-visa-applied-candidate', compact('offeredCandidate'));
    }

    public function showVisaRejectedCandidate($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('UAEAdmin.visa.show-visa-rejected-candidate', compact('offeredCandidate'));
    }

    public function visaStatusOfferedCandidate($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('UAEAdmin.visa.visa-status-result', compact('offeredCandidate'));
    }

    public function visaStatusOfferedCandidateUpdate(Request $request, $offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        $offeredCandidate->result_status = $request->resultStatus;
        $offeredCandidate->visa_document = $request->comments;
        $offeredCandidate->visa_reason = $request->rejectReason;
        if ($request->hasFile('document')) {
            $image             = $request->file('document');
            $folder_path       = 'uploads/document/';
            $image_new_name    = Str::random(20) . '-' . now()->timestamp . '.' . $image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path . $image_new_name);
            $offeredCandidate->visa_document   = $folder_path . $image_new_name;
        }
        try {
            $offeredCandidate->save();
            return back()->withToastSuccess('Successfully saved.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }
}
