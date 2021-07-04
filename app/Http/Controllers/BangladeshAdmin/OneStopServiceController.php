<?php

namespace App\Http\Controllers\BangladeshAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OneStopServiceController extends Controller
{
    public function request(){
        return view('BangladeshAdmin.oneStopServices.request');
    }

    public function approved(){
        return view('BangladeshAdmin.oneStopServices.approved');
    }

    public function rejected(){
        return view('BangladeshAdmin.oneStopServices.rejected');
    }
}
