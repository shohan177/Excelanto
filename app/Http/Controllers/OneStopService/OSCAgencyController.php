<?php

namespace App\Http\Controllers\OneStopService;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OSCAgencyController extends Controller
{
    public function request(){
        $users = User::where('user_type','child-one-stop-service')
                           ->where('active_status', 'Pending')
                           ->orderBy('id','DESC')->get();
        return view('OneStopService.childOsc.request', compact('users'));
    }

    public function approved(){
        $users = User::where('user_type','child-one-stop-service')
                     ->where('active_status', 'Approved')
                     ->orderBy('id','DESC')->get();
        return view('OneStopService.childOsc.approved', compact('users'));
    }

    public function rejected(){
        return view('OneStopService.childOsc.rejected');
    }
}
