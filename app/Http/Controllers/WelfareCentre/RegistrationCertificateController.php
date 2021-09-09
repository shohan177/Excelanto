<?php

namespace App\Http\Controllers\WelfareCentre;

use App\Http\Controllers\Controller;
use App\RegistrationCertificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationCertificateController extends Controller
{
    public function requests()
    {
        $registrationCertificates = RegistrationCertificate::where('service_status', 'Open')->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.registrationCertificate.requests', compact('registrationCertificates'));
    }
}
