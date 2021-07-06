<?php

namespace App\Http\Controllers\OneStopService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MedicalAgencyController extends Controller
{
    public function request(){
        return view('OneStopService.childOsc.request');
    }

    public function approved(){
        return view('OneStopService.childOsc.approved');
    }

    public function rejected(){
        return view('OneStopService.childOsc.rejected');
    }
}
