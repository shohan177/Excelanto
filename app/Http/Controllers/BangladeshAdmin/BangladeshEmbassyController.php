<?php

namespace App\Http\Controllers\BangladeshAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BangladeshEmbassyController extends Controller
{
    public function request(){
        return view('BangladeshAdmin.bangladeshEmbassy.request');
    }

    public function approved(){
        return view('BangladeshAdmin.bangladeshEmbassy.approved');
    }

    public function rejected(){
        return view('BangladeshAdmin.bangladeshEmbassy.rejected');
    }
}
