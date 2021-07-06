<?php

namespace App\Http\Controllers\OneStopService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TravelAgencyController extends Controller
{
    public function request(){
        return view('OneStopService.travelAgency.request');
    }

    public function approved(){
        return view('OneStopService.travelAgency.approved');
    }

    public function rejected(){
        return view('OneStopService.travelAgency.rejected');
    }
}
