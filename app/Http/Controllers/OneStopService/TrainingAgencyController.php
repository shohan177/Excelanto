<?php

namespace App\Http\Controllers\OneStopService;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class TrainingAgencyController extends Controller
{
    public function request(){
        $users = User::where('user_type','training-agency')
                     ->where('active_status', 'Pending')
                     ->orderBy('id','DESC')->get();
        return view('OneStopService.trainingAgency.request', compact('users'));
    }

    public function approved(){
        $users = User::where('user_type','training-agency')
                     ->where('active_status', 'Approved')
                     ->orderBy('id','DESC')->get();
        return view('OneStopService.trainingAgency.approved', compact('users'));
    }

    public function rejected(){
        $users = User::where('user_type','training-agency')
                     ->where('active_status', 'Rejected')
                     ->orderBy('id','DESC')->get();
        return view('OneStopService.trainingAgency.rejected', compact('users'));
    }
}
