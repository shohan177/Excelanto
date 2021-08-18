<?php

namespace App\Http\Controllers\OneStopService;

use App\Http\Controllers\Controller;
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
        return view('OneStopService.travelQuotation.approved');
    }

    public function ticketBooked(){
        return view('OneStopService.travelQuotation.ticketBooked');
    }

    public function viewSubmittedQuotation($submitted_travel_enquiry_id){
        $submittedTravelEnquiry = SubmittedTravelEnquiry::findOrfail($submitted_travel_enquiry_id);
        $user = User::find($submittedTravelEnquiry->travelEnquiry->oss_id);
        return view('OneStopService.travelQuotation.view-submitted-quotation', compact('submittedTravelEnquiry','user'));
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
}
