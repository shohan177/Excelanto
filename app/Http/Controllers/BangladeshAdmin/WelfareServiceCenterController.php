<?php

namespace App\Http\Controllers\BangladeshAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelfareServiceCenterController extends Controller
{
    public function welfare_company_request(){
        return view('BangladeshAdmin.welfare_service_centers.welfare_company_request');
    }

    public function welfare_approved_request(){
        return view('BangladeshAdmin.welfare_service_centers.welfare_approved_request');
    }

    public function welfare_rejected_request(){
        return view('BangladeshAdmin.welfare_service_centers.welfare_rejected_request');
    }
}
