<?php

namespace App\Http\Controllers\TravelAgency;

use App\Http\Controllers\Controller;
use App\SubmittedTravelEnquiry;
use App\TravelEnquiry;
use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;

class EnquiriesController extends Controller
{
    public function new()
    {
        $travelEnquiries = TravelEnquiry::where('enquiry_status', 'New')->orderBy('id', 'DESC')->get();
        return view('TravelAgency.Enquiries.new', compact('travelEnquiries'));
    }
    public function expired()
    {
        $travelEnquiries = TravelEnquiry::whereDate('end_date', '<=', Carbon::now())->orderBy('id', 'DESC')->get();
        return view('TravelAgency.Enquiries.expired', compact('travelEnquiries'));
    }

    public function view($id){
        $travelEnquiry = TravelEnquiry::findOrFail($id);
        $user = User::find($travelEnquiry->oss_id);
        return view('TravelAgency.Enquiries.view', compact('travelEnquiry','user'));
    }

    public function apply($id){
        $travelEnquiry = TravelEnquiry::findOrFail($id);
        return view('TravelAgency.Enquiries.apply', compact('travelEnquiry'));
    }

    public function applyStore(Request $request, $id ){
        $request->validate([
            'totalCost' =>  'required',
        ]);

        $travelEnquiry = TravelEnquiry::findOrFail($id);
        $submittedTravelEnquiry = new SubmittedTravelEnquiry();
        $submittedTravelEnquiry->travel_agency_id  = Auth::user()->id;
        $submittedTravelEnquiry->enquiry_id        = $travelEnquiry->id;
        $submittedTravelEnquiry->journey_date      = $travelEnquiry->date_of_journey;
        $submittedTravelEnquiry->total_tickets     = $travelEnquiry->tickets_required;
        $submittedTravelEnquiry->submitted_cost    = $request->totalCost;
        $submittedTravelEnquiry->travel_agency_comments  = $request->comments;
        $submittedTravelEnquiry->submitted_date    = Carbon::now();
        $submittedTravelEnquiry->submitted_status  = 'New';
        try {
            $travelEnquiry->save();
            return back()->withToastSuccess('Successfully saved.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }
}
