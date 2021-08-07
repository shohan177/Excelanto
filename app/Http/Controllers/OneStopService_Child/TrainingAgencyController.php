<?php

namespace App\Http\Controllers\OneStopService_Child;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrainingAgencyController extends Controller
{
    public function all(){
        $trainingAgencies = User::where('user_type','training-agency')
                               ->where('active_status', 'Approved')
                               ->where('childosc_id', Auth::user()->id)
                               ->orderBy('id','DESC')->get();
        return view('OneStopService_Child.trainingAgency.all', compact('trainingAgencies'));
    }
}
