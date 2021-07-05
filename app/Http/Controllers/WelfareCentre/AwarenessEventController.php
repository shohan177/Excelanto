<?php

namespace App\Http\Controllers\WelfareCentre;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class  AwarenessEventController extends Controller
{
    public function create(){
        return view('WelfareCentre.AwarenessEvent.create');
    }
    public function upcoming_events(){
        return view('WelfareCentre.AwarenessEvent.upcoming');
    }
    public function total_events(){
        return view('WelfareCentre.AwarenessEvent.total_events');
    }
}
