<?php

namespace App\Http\Controllers\BangladeshAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecruitingAgencieController extends Controller
{
    public function company_request(){
        return view('BangladeshAdmin.recruiting_agencies.company_request');
    }
}
