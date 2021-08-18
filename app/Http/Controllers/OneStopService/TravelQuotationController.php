<?php

namespace App\Http\Controllers\OneStopService;

use App\Http\Controllers\Controller;
use App\SubmittedTravelEnquiry;
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
}
