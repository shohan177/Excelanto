<?php

namespace App\Http\Controllers\RecruitingAgency;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecruitingAgencyDashboardController extends Controller
{
    public function dashboard(){
        return view('RecruitingAgency.welcome');
    }
}
