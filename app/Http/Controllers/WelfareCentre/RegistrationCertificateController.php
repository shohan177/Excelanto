<?php

namespace App\Http\Controllers\WelfareCentre;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationCertificateController extends Controller
{
    public function requests()
    {
        return view('WelfareCentre.WSC_Registered.registrationCertificate.requests');
    }
}
