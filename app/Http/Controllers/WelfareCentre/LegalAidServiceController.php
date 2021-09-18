<?php

namespace App\Http\Controllers\WelfareCentre;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\LegalAidService;

class LegalAidServiceController extends Controller
{
    public function request()
    {
        $legalAids =  LegalAidService::where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.legalAid.request', compact('legalAids'));
    }

    public function status($id)
    {
        $legalAid = LegalAidService::findOrFail($id);
        return view('WelfareCentre.WSC_Registered.legalAid.status', compact('legalAid'));
    }

    public function statusUpdete(Request $request, $id)
    {
        $request->validate([
            'serviceStatus' => 'required'
        ]);

        $legalAid = LegalAidService::findOrFail($id);
        $legalAid->service_status = $request->serviceStatus;
        try {
            $legalAid->save();
            return back()->withToastSuccess('Successfully Updated.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }
}
