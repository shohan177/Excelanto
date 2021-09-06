<?php

namespace App\Http\Controllers\WelfareCentre;

use App\Http\Controllers\Controller;
use App\InsuranceService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InsuranceController extends Controller
{
    public function request()
    {
        $insuranceServices =  InsuranceService::where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.insurance.request', compact('insuranceServices'));
    }
}
