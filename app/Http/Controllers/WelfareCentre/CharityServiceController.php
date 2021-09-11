<?php

namespace App\Http\Controllers\WelfareCentre;

use App\CharityService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CharityServiceController extends Controller
{
    public function request()
    {
        $charityServices = CharityService::where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.charity.request', compact('charityServices'));
    }

    public function charityStatus($id)
    {
        $charityService = CharityService::findOrFail($id);
        return view('WelfareCentre.WSC_Registered.charity.status', compact('charityService'));
    }

    public function charityStatusUpdete(Request $request, $id)
    {
        $request->validate([
            'serviceStatus' => 'required'
        ]);

        $charityService = CharityService::findOrFail($id);
        $charityService->service_status = $request->serviceStatus;
        try {
            $charityService->save();
            return back()->withToastSuccess('Successfully Updated.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }
}
