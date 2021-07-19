<?php

namespace App\Http\Controllers\WelfareCentre;

use App\EventCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class  AwarenessEventController extends Controller
{
    public function create(){
        $eventCategories = EventCategory::where('status','active')->get();
        return view('WelfareCentre.AwarenessEvent.create', compact('eventCategories'));
    }
    public function upcoming_events(){
        return view('WelfareCentre.AwarenessEvent.upcoming');
    }
    public function total_events(){
        return view('WelfareCentre.AwarenessEvent.total_events');
    }
}
