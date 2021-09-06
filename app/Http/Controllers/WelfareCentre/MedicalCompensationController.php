<?php

namespace App\Http\Controllers\WelfareCentre;

use App\Http\Controllers\Controller;
use App\MedicalCompensation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MedicalCompensationController extends Controller
{
    public function request()
    {
        $medicalCompensations =  MedicalCompensation::where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.medicalCompensation.request', compact('medicalCompensations'));
    }
}
