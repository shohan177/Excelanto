<?php

namespace App\Http\Controllers\OneStopService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TravelQuotationController extends Controller
{
    public function received(){
        return view('OneStopService.travelQuotation.received');
    }

    public function approved(){
        return view('OneStopService.travelQuotation.approved');
    }

    public function ticketBooked(){
        return view('OneStopService.travelQuotation.ticketBooked');
    }
}
