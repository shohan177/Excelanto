<?php

namespace App\Http\Controllers\OneStopService;

use App\Http\Controllers\Controller;
use App\OfferedCandidate;
use App\TravelEnquiry;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TravelEnquiryController extends Controller
{
    public function readyToTravel(){
        $offeredCandidates = OfferedCandidate::where('result_status',
        'Visa-Stamping-Approved')->orderBy('id','DESC')->get();
        return view('OneStopService.travelEnquiry.readyToTravel', compact('offeredCandidates'));
    }

    public function newTravel(){
        return view('OneStopService.travelEnquiry.newTravel');
    }

    public function newTravelStore(Request $request){
        $request->validate([
            'startingPoint' =>  'required',
            'endPoint' =>  'required',
            'totalTickets' =>  'required',
            'dateOfJounrey' =>  'required',
            'enquiryEndDate' =>  'required',
        ]);

        $travelEnquiry = new TravelEnquiry();

        $travelEnquiry->start_point  = $request->startingPoint;
        $travelEnquiry->end_point  = $request->endPoint;
        $travelEnquiry->tickets_required  = $request->totalTickets;
        $travelEnquiry->date_of_journey   = $request->dateOfJounrey;
        $travelEnquiry->end_date   = $request->enquiryEndDate;
        $travelEnquiry->oss_comments  = $request->comments;
        $travelEnquiry->oss_id   = Auth::user()->id;
        $travelEnquiry->enquiry_status      = 'New';
        $travelEnquiry->created_date       = Carbon::now();
        try {
            $travelEnquiry->save();
            return back()->withToastSuccess('Successfully saved.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }

    public function postedTravel(){
        $travelEnquiries = TravelEnquiry::orderBy('id','DESC')->get();
        return view('OneStopService.travelEnquiry.postedTravel', compact('travelEnquiries'));
    }

    public function ShowPostedTravel($travel_enquiry_id){
        $travelEnquiry = TravelEnquiry::findOrFail($travel_enquiry_id);
        $user = User::find($travelEnquiry->oss_id);
        return view('OneStopService.travelEnquiry.show-posted-travel-details', compact('travelEnquiry','user'));
    }

    public function showVisaStampingApprovedCandidate($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('OneStopService.travelEnquiry.show-visa-stamping-approved-candidate', compact('offeredCandidate'));
    }
}
