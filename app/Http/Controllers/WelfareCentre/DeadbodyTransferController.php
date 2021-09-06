<?php

namespace App\Http\Controllers\WelfareCentre;

use App\DeadbodyTransfer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeadbodyTransferController extends Controller
{
    public function request()
    {
        $deadbodyTransfers =  DeadbodyTransfer::where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.deadbodyTransfer.request', compact('deadbodyTransfers'));
    }
}
