<?php

namespace App\Http\Controllers\BangladeshAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelfareServiceCenterController extends Controller
{
    public function request(){
        return view('BangladeshAdmin.welfare_service_centers.request');
    }

    public function approved(){
        return view('BangladeshAdmin.welfare_service_centers.approved');
    }

    public function rejected(){
        return view('BangladeshAdmin.welfare_service_centers.rejected');
    }
}
