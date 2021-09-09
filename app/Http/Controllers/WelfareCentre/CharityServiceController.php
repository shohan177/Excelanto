<?php

namespace App\Http\Controllers\WelfareCentre;

use App\CharityService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CharityServiceController extends Controller
{
    public function request()
    {
        $charityServices = CharityService::where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.charity.request', compact('charityServices'));
    }
}
