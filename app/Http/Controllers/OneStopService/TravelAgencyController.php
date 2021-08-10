<?php

namespace App\Http\Controllers\OneStopService;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class TravelAgencyController extends Controller
{
    public function request(){
        $users = User::where('user_type','travel-agency')
                     ->where('active_status', 'Pending')
                     ->orderBy('id','DESC')->get();
        return view('OneStopService.travelAgency.request', compact('users'));
    }

    public function approved(){
        $users = User::where('user_type','travel-agency')
                     ->where('active_status', 'Approved')
                     ->orderBy('id','DESC')->get();
        return view('OneStopService.travelAgency.approved', compact('users'));
    }

    public function rejected(){
        $users = User::where('user_type','travel-agency')
                     ->where('active_status', 'Rejected')
                     ->orderBy('id','DESC')->get();
        return view('OneStopService.travelAgency.rejected', compact('users'));
    }
}
