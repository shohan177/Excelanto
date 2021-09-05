<?php

namespace App\Http\Controllers\WelfareCentre;

use App\Http\Controllers\Controller;
use App\JailAndDeportation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JailDeportationController extends Controller
{
    public function request()
    {
        $jailDeportations = JailAndDeportation::where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.jailDeportation.request', compact('jailDeportations'));
    }
}
