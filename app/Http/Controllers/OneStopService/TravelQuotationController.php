<?php

namespace App\Http\Controllers\OneStopService;

use App\Candidate as AppCandidate;
use App\Http\Controllers\Controller;
use App\OfferedCandidate;
use App\Candidate;
use App\SubmittedTravelEnquiry;
use App\User;
use Illuminate\Http\Request;

class TravelQuotationController extends Controller
{
    public function received(){

        $submittedTravelEnquiries = SubmittedTravelEnquiry::where('submitted_status', 'New')->orderBy('id','DESC')->get();
        return view('OneStopService.travelQuotation.received', compact('submittedTravelEnquiries'));
    }

    public function approved(){
        $submittedTravelEnquiries = SubmittedTravelEnquiry::where('submitted_status', 'Approved')->orderBy('id','DESC')->get();
        return view('OneStopService.travelQuotation.approved', compact('submittedTravelEnquiries'));
    }

    public function ticketBooked(){
        $offeredCandidates = OfferedCandidate::whereIn('travel_status',['Ticket-Issued','Forwarded','Activated'])->orderBy('id','DESC')->get();
        return view('OneStopService.travelQuotation.ticketBooked', compact('offeredCandidates'));
    }

    public function viewSubmittedQuotation($submitted_travel_enquiry_id){
        $submittedTravelEnquiry = SubmittedTravelEnquiry::findOrfail($submitted_travel_enquiry_id);
        $user = User::find($submittedTravelEnquiry->travelEnquiry->oss_id);
        return view('OneStopService.travelQuotation.view-submitted-quotation', compact('submittedTravelEnquiry','user'));
    }
    public function viewApprovedQuotation($submitted_travel_enquiry_id){
        $submittedTravelEnquiry = SubmittedTravelEnquiry::findOrfail($submitted_travel_enquiry_id);
        $user = User::find($submittedTravelEnquiry->travelEnquiry->oss_id);
        return view('OneStopService.travelQuotation.view-approved-quotation', compact('submittedTravelEnquiry','user'));
    }

    public function approveNow($id){
        $submittedTravelEnquiry = SubmittedTravelEnquiry::findOrFail($id);
        $submittedTravelEnquiry->submitted_status = "Approved";
        try {
            $submittedTravelEnquiry->save();
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
        $submittedTravelEnquiry = SubmittedTravelEnquiry::findOrFail($id);
        $submittedTravelEnquiry->submitted_status = "Rejected";
        try {
            $submittedTravelEnquiry->save();
            return response()->json([
                'type' => 'success',
                'message' => 'Successfully Updated'
            ]);
        }catch (\Exception $exception){
            return response()->json([
                'type' => 'error',
                'message' => $exception->getMessage()
            ]);
        }
    }

    public function selectCandidates(){
        $offeredCandidates = OfferedCandidate::where('result_status', 'Visa-Stamping-Approved')->orderBy('id','DESC')->get();
        return view('OneStopService.travelQuotation.select-candidates', compact('offeredCandidates'));
    }

    public function showStampingApprovedCandidate($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrfail($offered_candidate_id);
        $candidate = Candidate::findOrFail($offeredCandidate->candidate_id);
        return view('OneStopService.travelQuotation.stamping-approved-candidate', compact('offeredCandidate','candidate'));
    }

}
