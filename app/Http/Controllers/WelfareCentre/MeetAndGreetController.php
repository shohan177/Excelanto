<?php

namespace App\Http\Controllers\WelfareCentre;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MeetAndGreet;
use Illuminate\Support\Facades\Auth;


class MeetAndGreetController extends Controller
{
    public function meet_greet_request()
    {
        $meetAndGreets = MeetAndGreet::where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.meet_greet_request', compact('meetAndGreets'));
    }

    public function meetGreetStatus($id)
    {
        $meetAndGreet = MeetAndGreet::findOrFail($id);
        return view('WelfareCentre.WSC_Registered.meet-greet-status', compact('meetAndGreet'));
    }

    public function meetGreetStatusUpdete(Request $request, $id)
    {
        $request->validate([
            'serviceStatus' => 'required'
        ]);

        $meetAndGreet = MeetAndGreet::findOrFail($id);
        $meetAndGreet->active_status = $request->serviceStatus;
        try {
            $meetAndGreet->save();
            return back()->withToastSuccess('Successfully Updated.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }
}
