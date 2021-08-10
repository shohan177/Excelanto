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
        return view('OneStopService.trainingAgency.approved');
    }

    public function rejected(){
        return view('OneStopService.trainingAgency.rejected');
    }
}
