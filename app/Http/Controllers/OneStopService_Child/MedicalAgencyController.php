<?php

namespace App\Http\Controllers\OneStopService_Child;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MedicalAgencyController extends Controller
{
    public function all(){
        $medicalAgencies = User::where('user_type','medical-agency')
                               ->where('active_status', 'Approved')
                               ->where('childosc_id', Auth::user()->id)
                               ->orderBy('id','DESC')->get();
        return view('OneStopService_Child.medicalAgency.all', compact('medicalAgencies'));
    }
}
