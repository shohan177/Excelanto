<?php

namespace App\Http\Controllers\OneStopService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrainingAgencyController extends Controller
{
    public function request(){
        return view('OneStopService.trainingAgency.request');
    }

    public function approved(){
        return view('OneStopService.trainingAgency.approved');
    }

    public function rejected(){
        return view('OneStopService.trainingAgency.rejected');
    }
}
