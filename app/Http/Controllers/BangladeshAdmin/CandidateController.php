<?php

namespace App\Http\Controllers\BangladeshAdmin;

use App\AppliedJob;
use App\Candidate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\OfferedCandidate;

class CandidateController extends Controller
{

    public function requests()
    {
        $appliedJobs = AppliedJob::where('status', 'Approved')->orderBy('id','DESC')->get();
        return view('BangladeshAdmin.Candidate.requests', compact('appliedJobs'));
    }
    public function viewRequested($applied_job_id)
    {
        $appliedJob = AppliedJob::findOrFail($applied_job_id);
        $selectedCandidates = Candidate::where('job_category_id',$appliedJob->jobPost->job_category->id)
                                       ->where('created_id',$appliedJob->applier_id)
                                       ->where('job_id',$appliedJob->job_post_id)
                                       ->where('status',"Selected")->orderBy('id','DESC')->get();

        return view('BangladeshAdmin.Candidate.view-requests', compact('selectedCandidates'));
    }
    public function forwarded()
    {
        $forwardedCandidates = Candidate::where('status',"Forwarded")->orderBy('id','DESC')->get();
        return view('BangladeshAdmin.Candidate.forwarded', compact('forwardedCandidates'));
    }
    public function reviewed()
    {
        $offeredCandidates = OfferedCandidate::where('result_status', '!=', 'Finalized')->orderBy('id','DESC')->get();
        return view('BangladeshAdmin.Candidate.reviewed', compact('offeredCandidates'));
    }
    public function finalized()
    {
        $offeredCandidates = OfferedCandidate::where('result_status', 'Finalized')->orderBy('id','DESC')->get();
        return view('BangladeshAdmin.Candidate.finalized', compact('offeredCandidates'));
    }
    public function tickets_booked_List()
    {
        $offeredCandidates = OfferedCandidate::where('welfare_center_id', '!=' ,'')->whereIn('travel_status',['Ticket-Issued','Forwarded','Activated'])->orderBy('id','DESC')->get();
        return view('BangladeshAdmin.Candidate.tickets_booked_List', compact('offeredCandidates'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $candidate = Candidate::findOrFail($id);
        return view('BangladeshAdmin.Candidate.show-profile', compact('candidate'));
    }

    public function showFinalCandidate($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('BangladeshAdmin.Candidate.final-candidate-profile', compact('offeredCandidate'));
    }

    public function showBookedCandidate($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('BangladeshAdmin.Candidate.booked-candidate-profile', compact('offeredCandidate'));
    }

    public function forwardNow($id){
        $candidate = Candidate::findOrFail($id);
        $candidate->status = "Forwarded";
        $candidate->result_status = "New";
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

    public function forwardToUae($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        $offeredCandidate->travel_status = "Forwarded";
        $offeredCandidate->active_status = "Forwarded";
        try {
            $offeredCandidate->save();
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidate $candidate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidate $candidate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidate $candidate)
    {
        //
    }
}
