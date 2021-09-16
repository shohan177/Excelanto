<?php

namespace App\Http\Controllers\WelfareCentre;

use App\ChangeEmployerService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChangeEmployerServiceController extends Controller
{
    public function requests()
    {
        $changeEmployerServices =  ChangeEmployerService::where('service_status', 'Open')->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.changeOfEmployer.requests', compact('changeEmployerServices'));
    }
}
