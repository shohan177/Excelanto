<?php

namespace App\Http\Controllers\WelfareCentre;

use App\Http\Controllers\Controller;
use App\MedicalCompensation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MedicalCompensationController extends Controller
{
    public function request()
    {
        $medicalCompensations =  MedicalCompensation::where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.medicalCompensation.request', compact('medicalCompensations'));
    }

    public function medicalCompensationStatus($id)
    {
        $medicalCompensation = MedicalCompensation::findOrFail($id);
        return view('WelfareCentre.WSC_Registered.medicalCompensation.status', compact('medicalCompensation'));
    }

    public function medicalCompensationStatusUpdete(Request $request, $id)
    {
        $request->validate([
            'serviceStatus' => 'required'
        ]);

        $medicalCompensation = MedicalCompensation::findOrFail($id);
        $medicalCompensation->service_status = $request->serviceStatus;
        try {
            $medicalCompensation->save();
            return back()->withToastSuccess('Successfully Updated.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }
}
