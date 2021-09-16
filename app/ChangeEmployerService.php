<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ChangeEmployerService extends Model
{
    public function requests()
    {
        $changeEmployerServices =  ChangeEmployerService::where('service_status', 'Open')->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.changeOfEmployer.requests', compact('changeEmployerServices'));
    }

    public function change_emp_request()
    {
        return view('WelfareCentre.WSC_Registered.LegalisationChange.change_emp_request');
    }


}
