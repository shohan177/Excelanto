<?php

namespace App\Http\Controllers\OneStopService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TravelEnquiryController extends Controller
{
    public function readyToTravel(){
        return view('OneStopService.travelEnquiry.readyToTravel');
    }

    public function newTravel(){
        return view('OneStopService.travelEnquiry.newTravel');
    }

    public function postedTravel(){
        return view('OneStopService.travelEnquiry.postedTravel');
    }
}
