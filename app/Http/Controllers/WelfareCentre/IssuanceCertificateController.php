<?php

namespace App\Http\Controllers\WelfareCentre;

use App\Http\Controllers\Controller;
use App\IssuanceCertificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IssuanceCertificateController extends Controller
{
    public function requests()
    {
        $issuanceCertificates = IssuanceCertificate::where('service_status', 'Open')->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.IssuanceCertificate.requests');
    }
}
