<?php

namespace App\Http\Controllers\EmployerCompany;

use App\AppliedJob;
use App\Candidate;
use App\Http\Controllers\Controller;
use App\JobCategory;
use App\OfferedCandidate;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

class CandidateController extends Controller
{
    public function new_candidates()
    {
        $appliedJobs = AppliedJob::where('status', 'Approved')->orderBy('id', 'DESC')->get();
        return view('EmployerCompany.candidate.new_candidates', compact('appliedJobs'));
    }
    public function newCandidateList($applied_job_id)
    {
        $appliedJob = AppliedJob::findOrFail($applied_job_id);
        $candidates = Candidate::where('job_category_id', $appliedJob->jobPost->job_category->id)
            ->where('created_id', $appliedJob->applier_id)
            // ->where('result_status', '!=', null)
            ->where('status', 'Forwarded')
            ->orderBy('id', 'DESC')->get();
        return view('EmployerCompany.candidate.new-candidate-list', compact('candidates'));
    }
    public function candidates_result()
    {
        $offeredCandidates = OfferedCandidate::where('result_status', '!=', 'Finalized')->orderBy('id', 'DESC')->get();
        return view('EmployerCompany.candidate.candidates_result', compact('offeredCandidates'));
    }
    public function finalized_candidates()
    {
        $offeredCandidates = OfferedCandidate::where('created_id',Auth::user()->id)
                                             ->where('result_status', 'Finalized')
                                             ->orderBy('id', 'DESC')->get();
        return view('EmployerCompany.candidate.finalized_candidates', compact('offeredCandidates'));
    }
    public function tickets_booked_list()
    {
        $offeredCandidates = OfferedCandidate::whereIn('travel_status', ['Forwarded','Activated'])->orderBy('id', 'DESC')->get();
        return view('EmployerCompany.candidate.tickets_booked_list', compact('offeredCandidates'));
    }
    public function show($id)
    {
        $candidate = Candidate::findOrFail($id);
        return view('EmployerCompany.candidate.show', compact('candidate'));
    }

    public function showOfferedCandidate($offered_candidate_id)
    {
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('EmployerCompany.candidate.show-offered-candidate', compact('offeredCandidate'));
    }

    public function showBookedCandidate($offered_candidate_id)
    {
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('EmployerCompany.candidate.show-booked-candidate', compact('offeredCandidate'));
    }

    public function editCandidateResult($id)
    {
        $jobCategories = JobCategory::orderBy('id', 'DESC')->get();
        $candidate = Candidate::findOrFail($id);
        return view('EmployerCompany.candidate.edit-candidate-result', compact('candidate', 'jobCategories'));
    }

    public function updateCandidateResult(Request $request, $id)
    {
        $request->validate([
            'resultStatus' =>  'required',
            'offerLetter' => 'mimes:pdf',
        ]);
        $candidate = Candidate::findOrFail($id);
        $candidate->status = "Reviewed";
        $candidate->save();

        $offeredCandidate = new OfferedCandidate();
        $offeredCandidate->candidate_id = $candidate->id;
        $offeredCandidate->candidate_name = $candidate->candidate_name;
        $offeredCandidate->phone_number = $candidate->phone_number;
        $offeredCandidate->candidate_email = $candidate->candidate_email;
        $offeredCandidate->job_post_id = $candidate->job_id;
        $offeredCandidate->job_category_id = $candidate->job_category_id;
        $offeredCandidate->result_status = $request->resultStatus;
        $offeredCandidate->employer_comments = $request->comments;
        $offeredCandidate->created_at = Carbon::now();
        $offeredCandidate->created_id = Auth::user()->id;

        if ($request->hasFile('offerLetter')) {
            $pdf             = $request->file('offerLetter');
            $folder_path       = 'uploads/offer-letter/';
            $pdf_new_name    = Str::random(20) . '-' . now()->timestamp . '.' . $pdf->getClientOriginalExtension();
            // save to server
            $request->offerLetter->move(public_path($folder_path), $pdf_new_name);
            $offeredCandidate->offer_letter   = $folder_path . $pdf_new_name;
        }

        try {
            $offeredCandidate->save();
            return back()->withToastSuccess('Successfully saved.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }

    public function editInterview($offered_candidate_id)
    {
        $jobCategories = JobCategory::orderBy('id', 'DESC')->get();
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('EmployerCompany.candidate.edit-interview', compact('offeredCandidate', 'jobCategories'));
    }

    public function updateInterview(Request $request, $offered_candidate_id)
    {
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        $offeredCandidate->result_status = $request->resultStatus;
        $offeredCandidate->employer_comments = $request->comments;
        if ($request->hasFile('offerLetter')) {
            $pdf             = $request->file('offerLetter');
            $folder_path       = 'uploads/offer-letter/';
            $pdf_new_name    = Str::random(20) . '-' . now()->timestamp . '.' . $pdf->getClientOriginalExtension();
            // save to server
            $request->offerLetter->move(public_path($folder_path), $pdf_new_name);
            $offeredCandidate->offer_letter   = $folder_path . $pdf_new_name;
        }
        try {
            $offeredCandidate->save();
            return back()->withToastSuccess('Successfully saved.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }
}
