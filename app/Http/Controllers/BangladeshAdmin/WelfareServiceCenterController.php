<?php

namespace App\Http\Controllers\BangladeshAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelfareServiceCenterController extends Controller
{
    public function request(){
        return view('BangladeshAdmin.welfareServiceCenters.request');
    }

    public function approved(){
        return view('BangladeshAdmin.welfareServiceCenters.approved');
    }

    public function rejected(){
        return view('BangladeshAdmin.welfareServiceCenters.rejected');
    }
}
