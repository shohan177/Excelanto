<?php

namespace App\Http\Controllers\WelfareCentre;

use App\Http\Controllers\Controller;
use App\NewPassportService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewPassportServiceController extends Controller
{
    public function requests()
    {
        $newPassportServices =  NewPassportService::where('service_status', 'Open')->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.newPassport.requests', compact('newPassportServices'));
    }

    public function payments()
    {
        $newPassportServices =  NewPassportService::where('service_status', 'On Process')->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.newPassport.payments', compact('newPassportServices'));
    }

    public function paids()
    {
        $newPassportServices =  NewPassportService::where('service_status', 'Paid')->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.newPassport.paids', compact('newPassportServices'));
    }

    public function delivery()
    {
        $newPassportServices = NewPassportService::whereIn('service_status', ['Approved','Rejected'])->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.newPassport.delivery', compact('newPassportServices'));
    }
}
