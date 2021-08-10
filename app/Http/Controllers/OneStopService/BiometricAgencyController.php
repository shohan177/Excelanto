<?php

namespace App\Http\Controllers\OneStopService;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class BiometricAgencyController extends Controller
{
    public function request(){
        $users = User::where('user_type','biometric-agency')
                     ->where('active_status', 'Pending')
                     ->orderBy('id','DESC')->get();
        return view('OneStopService.biometricAgency.request', compact('users'));
    }

    public function approved(){
        $users = User::where('user_type','biometric-agency')
                     ->where('active_status', 'Approved')
                     ->orderBy('id','DESC')->get();
        return view('OneStopService.biometricAgency.approved', compact('users'));
    }

    public function rejected(){
        $users = User::where('user_type','biometric-agency')
                     ->where('active_status', 'Rejected')
                     ->orderBy('id','DESC')->get();
        return view('OneStopService.biometricAgency.rejected', compact('users'));
    }
}
