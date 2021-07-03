<?php

namespace App\Http\Controllers\BangladeshAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OneStopServiceController extends Controller
{
    public function oss_company_request(){
        return view('BangladeshAdmin.one_stop_services.oss_company_request');
    }

    public function oss_approved_request(){
        return view('BangladeshAdmin.one_stop_services.oss_approved_request');
    }

    public function oss_rejected_request(){
        return view('BangladeshAdmin.one_stop_services.oss_rejected_request');
    }
}
