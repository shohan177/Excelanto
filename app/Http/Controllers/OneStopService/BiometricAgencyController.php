<?php

namespace App\Http\Controllers\OneStopService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BiometricAgencyController extends Controller
{
    public function request(){
        return view('OneStopService.biometricAgency.request');
    }

    public function approved(){
        return view('OneStopService.biometricAgency.approved');
    }

    public function rejected(){
        return view('OneStopService.biometricAgency.rejected');
    }
}
