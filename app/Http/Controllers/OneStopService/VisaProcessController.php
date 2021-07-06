<?php

namespace App\Http\Controllers\OneStopService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisaProcessController extends Controller
{
    public function approved(){
        return view('OneStopService.visa.approved');
    }

    public function rejected(){
        return view('OneStopService.visa.rejected');
    }
}
