<?php

namespace App\Http\Controllers\BangladeshAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BangladeshEmbassyController extends Controller
{
    public function bangladesh_embassy_request(){
        return view('BangladeshAdmin.bangladesh_embassy.bangladesh_embassy_request');
    }

    public function bangladesh_embassy_approved_request(){
        return view('BangladeshAdmin.bangladesh_embassy.bangladesh_embassy_approved_request');
    }

    public function bangladesh_embassy_rejected_request(){
        return view('BangladeshAdmin.bangladesh_embassy.bangladesh_embassy_rejected_request');
    }
}
