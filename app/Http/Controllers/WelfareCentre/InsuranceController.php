<?php

namespace App\Http\Controllers\WelfareCentre;

use App\Http\Controllers\Controller;
use App\InsuranceService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InsuranceController extends Controller
{
    public function request()
    {
        $insuranceServices = InsuranceService::where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.insurance.request', compact('insuranceServices'));
    }

    public function insuranceStatus($id)
    {
        $insuranceService = InsuranceService::findOrFail($id);
        return view('WelfareCentre.WSC_Registered.insurance.status', compact('insuranceService'));
    }

    public function insuranceStatusUpdete(Request $request, $id)
    {
        $request->validate([
            'serviceStatus' => 'required',
        ]);

        $insuranceService = InsuranceService::findOrFail($id);
        $insuranceService->service_status = $request->serviceStatus;
        try {
            $insuranceService->save();
            return back()->withToastSuccess('Successfully Updated.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }
}
