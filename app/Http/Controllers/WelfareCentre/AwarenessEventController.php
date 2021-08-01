<?php

namespace App\Http\Controllers\WelfareCentre;

use App\AwarenessEvent;
use App\EventCategory;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class  AwarenessEventController extends Controller
{
    public function create(){
        $eventCategories = EventCategory::where('status','active')->orderBy('id','DESC')->get();
        return view('WelfareCentre.AwarenessEvent.create', compact('eventCategories'));
    }
    public function upcoming_events(){
        $upcomingEvents = AwarenessEvent::whereDate('event_date', '>=', Carbon::now())->orderBy('id','DESC')->get();
        return view('WelfareCentre.AwarenessEvent.upcoming', compact('upcomingEvents'));
    }
    public function total_events(){
        $totalEvents = AwarenessEvent::all();
        return view('WelfareCentre.AwarenessEvent.total_events', compact('totalEvents'));
    }

    public function store(Request $request){
        $request->validate([
            'event_category' => 'required',
            'event_agenda' => 'required',
            'conducted_by' => 'required',
            'event_date' => 'required',
            'event_time' => 'required',
            'place' => 'required',
            'description' => 'required'
        ]);

        $awarenessEvent = new AwarenessEvent();
        $awarenessEvent->event_category_id    =   $request->event_category;
        $awarenessEvent->event_agenda    =  $request->event_agenda;
        $awarenessEvent->conducted_by            =   $request->conducted_by;
        $awarenessEvent->event_date    =   $request->event_date;
        $awarenessEvent->event_time       =   $request->event_time;
        $awarenessEvent->place        =   $request->place;
        $awarenessEvent->event_description    =   $request->description;

        try {
            $awarenessEvent->save();
            return back()->withToastSuccess('Successfully saved.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }

    public function show($id){
        $awarenessEvent = AwarenessEvent::findOrFail($id);
        return view('WelfareCentre.AwarenessEvent.show', compact('awarenessEvent'));
    }

    public function edit($id){
        $awarenessEvent = AwarenessEvent::findOrFail($id);
        $eventCategories = EventCategory::where('status','active')->orderBy('id','DESC')->get();
        return view('WelfareCentre.AwarenessEvent.edit', compact('awarenessEvent','eventCategories'));
    }

    public function update($id ,Request $request){
        $request->validate([
            'event_category' => 'required',
            'event_agenda' => 'required',
            'conducted_by' => 'required',
            'event_date' => 'required',
            'event_time' => 'required',
            'place' => 'required',
            'description' => 'required'
        ]);

        $awarenessEvent = AwarenessEvent::findOrFail($id);
        $awarenessEvent->event_category_id    =   $request->event_category;
        $awarenessEvent->event_agenda    =  $request->event_agenda;
        $awarenessEvent->conducted_by            =   $request->conducted_by;
        $awarenessEvent->event_date    =   $request->event_date;
        $awarenessEvent->event_time       =   $request->event_time;
        $awarenessEvent->place        =   $request->place;
        $awarenessEvent->event_description    =   $request->description;

        try {
            $awarenessEvent->save();
            return back()->withToastSuccess('Successfully saved.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }
}
