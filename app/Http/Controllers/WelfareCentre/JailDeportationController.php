<?php

namespace App\Http\Controllers\WelfareCentre;

use App\Http\Controllers\Controller;
use App\JailAndDeportation;
use App\MeetAndGreet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JailDeportationController extends Controller
{
    public function request()
    {
        $jailDeportations = JailAndDeportation::where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.jailDeportation.request', compact('jailDeportations'));
    }

    public function jailDeportationStatus($id)
    {
        $jailDeportation = JailAndDeportation::findOrFail($id);
        return view('WelfareCentre.WSC_Registered.jailDeportation.status', compact('jailDeportation'));
    }

    public function jailDeportationStatusUpdete(Request $request, $id)
    {
        $request->validate([
            'serviceStatus' => 'required'
        ]);

        $jailDeportation = JailAndDeportation::findOrFail($id);
        $jailDeportation->active_status = $request->serviceStatus;
        try {
            $jailDeportation->save();
            return back()->withToastSuccess('Successfully Updated.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }
}
