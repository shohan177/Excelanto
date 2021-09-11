<?php

namespace App\Http\Controllers\WelfareCentre;

use App\AmnestyService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AmnestyServiceController extends Controller
{
    public function request()
    {
        $amnestyServices = AmnestyService::where('service_status', 'Open')->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.legalByGovt.request', compact('amnestyServices'));
    }
}
