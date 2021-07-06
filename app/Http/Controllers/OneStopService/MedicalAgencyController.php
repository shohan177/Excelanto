<?php

namespace App\Http\Controllers\OneStopService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MedicalAgencyController extends Controller
{
    public function request(){
        return view('OneStopService.medicalAgency.request');
    }

    public function approved(){
        return view('OneStopService.medicalAgency.approved');
    }

    public function rejected(){
        return view('OneStopService.medicalAgency.rejected');
    }
}
