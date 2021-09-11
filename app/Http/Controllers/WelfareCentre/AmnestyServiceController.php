<?php

namespace App\Http\Controllers\WelfareCentre;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AmnestyServiceController extends Controller
{
    public function request()
    {
        return view('WelfareCentre.WSC_Registered.legalByGovt.request');
    }
}
