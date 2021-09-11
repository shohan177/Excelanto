<?php

namespace App\Http\Controllers\WelfareCentre;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ADRServiceController extends Controller
{
    public function request()
    {
        return view('WelfareCentre.WSC_Registered.adr.request');
    }
}
