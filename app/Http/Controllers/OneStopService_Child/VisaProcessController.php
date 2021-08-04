<?php

namespace App\Http\Controllers\OneStopService_Child;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisaProcessController extends Controller
{
    public function requested(){
        return view('OneStopService_Child.visa.requested');
    }
    public function approved(){
        return view('OneStopService_Child.visa.approved');
    }

    public function rejected(){
        return view('OneStopService_Child.visa.rejected');
    }
}
