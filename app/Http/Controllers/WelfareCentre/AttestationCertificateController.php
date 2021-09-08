<?php

namespace App\Http\Controllers\WelfareCentre;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AttestationCertificateController extends Controller
{
    public function requests()
    {
        return view('WelfareCentre.WSC_Registered.attestationCertificate.requests');
    }
}
