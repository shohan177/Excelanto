<?php

namespace App\Http\Controllers\WelfareCentre;

use App\Http\Controllers\Controller;
use App\PaymentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentServiceController extends Controller
{
    public function requests()
    {
        $paymentServices =  PaymentService::where('service_status', 'Open')->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.legalByRegular.requests', compact('paymentServices'));
    }

    public function upload($id)
    {
        $paymentService = PaymentService::findOrFail($id);
        return view('WelfareCentre.WSC_Registered.legalByRegular.upload', compact('paymentService'));
    }
}
