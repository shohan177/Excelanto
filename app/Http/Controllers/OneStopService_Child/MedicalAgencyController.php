<?php

namespace App\Http\Controllers\OneStopService_Child;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MedicalAgencyController extends Controller
{
    public function all(){
        return view('OneStopService_Child.medicalAgency.all');
    }
}
