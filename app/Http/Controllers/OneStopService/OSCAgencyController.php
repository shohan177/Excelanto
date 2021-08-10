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
        $users = User::where('user_type','child-one-stop-service')
                     ->where('active_status', 'Rejected')
                     ->orderBy('id','DESC')->get();
        return view('OneStopService.childOsc.rejected', compact('users'));
    }
}
