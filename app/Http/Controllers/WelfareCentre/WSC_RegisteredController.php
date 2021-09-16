<?php

namespace App\Http\Controllers\WelfareCentre;

use App\Http\Controllers\Controller;
use App\MeetAndGreet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class  WSC_RegisteredController extends Controller
{
    public function new_passport_request()
    {
        return view('WelfareCentre.WSC_Registered.passportNew.new_passport_request');
    }
    public function new_passport_payment()
    {
        return view('WelfareCentre.WSC_Registered.passportNew.new_passport_payment');
    }
    public function new_passport_status()
    {
        return view('WelfareCentre.WSC_Registered.passportNew.new_passport_status');
    }
    public function new_passport_delivery()
    {
        return view('WelfareCentre.WSC_Registered.passportNew.new_passport_delivery');
    }

    public function lost_passport_request()
    {
        return view('WelfareCentre.WSC_Registered.passportLost.lost_passport_request');
    }
    public function lost_passport_payment()
    {
        return view('WelfareCentre.WSC_Registered.passportLost.lost_passport_payment');
    }
    public function lost_passport_status()
    {
        return view('WelfareCentre.WSC_Registered.passportLost.lost_passport_status');
    }
    public function lost_passport_delivery()
    {
        return view('WelfareCentre.WSC_Registered.passportLost.lost_passport_delivery');
    }

    public function renew_passport_request()
    {
        return view('WelfareCentre.WSC_Registered.passportRenew.renew_passport_request');
    }
    public function renew_passport_payment()
    {
        return view('WelfareCentre.WSC_Registered.passportRenew.renew_passport_payment');
    }
    public function renew_passport_status()
    {
        return view('WelfareCentre.WSC_Registered.passportRenew.renew_passport_status');
    }
    public function renew_passport_delivery()
    {
        return view('WelfareCentre.WSC_Registered.passportRenew.renew_passport_delivery');
    }
}
