<?php

namespace App\Http\Controllers\OneStopService;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class MedicalAgencyController extends Controller
{
    public function request(){
        $users = User::where('user_type','medical-agency')
                     ->where('active_status', 'Pending')
                     ->orderBy('id','DESC')->get();
        return view('OneStopService.medicalAgency.request', compact('users'));
    }

    public function approved(){
        $users = User::where('user_type','medical-agency')
                     ->where('active_status', 'Approved')
                     ->orderBy('id','DESC')->get();
        return view('OneStopService.medicalAgency.approved', compact('users'));
    }

    public function rejected(){
        $users = User::where('user_type','medical-agency')
                     ->where('active_status', 'Rejected')
                     ->orderBy('id','DESC')->get();
        return view('OneStopService.medicalAgency.rejected', compact('users'));
    }
}
