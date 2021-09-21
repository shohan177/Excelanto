<?php

namespace App\Http\Controllers\WelfareCentre;

use App\AdrService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ADRServiceController extends Controller
{
    public function request()
    {
        $adrServices = AdrService::where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.adr.request', compact('adrServices'));
    }

    public function adrStatus($id)
    {
        $adrService = AdrService::findOrFail($id);
        return view('WelfareCentre.WSC_Registered.adr.status', compact('adrService'));
    }

    public function adrStatusUpdete(Request $request, $id)
    {
        $request->validate([
            'serviceStatus' => 'required'
        ]);

        $adrService = AdrService::findOrFail($id);
        $adrService->service_status = $request->serviceStatus;
        try {
            $adrService->save();
            return back()->withToastSuccess('Successfully Updated.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }
}
