<?php

namespace App\Http\Controllers\WelfareCentre;

use App\AmnestyService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AmnestyServiceController extends Controller
{
    public function requests()
    {
        $amnestyServices = AmnestyService::where('service_status', 'Open')->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.legalByGovt.requests', compact('amnestyServices'));
    }

    public function payments()
    {
        $amnestyServices = AmnestyService::where('service_status', 'On Process')->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.legalByGovt.payments', compact('amnestyServices'));
    }

    public function viewReceipt($id)
    {
        $amnestyService = AmnestyService::findOrFail($id);
        return view('WelfareCentre.WSC_Registered.legalByGovt.receipt', compact('amnestyService'));
    }

    public function statusUpdete($id)
    {
        $amnestyService = AmnestyService::findOrFail($id);
        if ($amnestyService->service_status == "On Process") {
            $amnestyService->service_status = 'Paid';
        }
        try {
            $amnestyService->save();
            return response()->json([
                'type' => 'success',
                'message' => 'Successfully Updated',
            ]);
        } catch (\Exception $exception) {
            return response()->json([
                'type' => 'error',
                'message' => $exception->getMessage(),
            ]);
        }
    }

    public function upload($id)
    {
        $amnestyService = AmnestyService::findOrFail($id);
        return view('WelfareCentre.WSC_Registered.legalByGovt.upload', compact('amnestyService'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'fees' => 'required|numeric',
            'deliveryCharge' => 'required|numeric',
        ]);

        $amnestyService = AmnestyService::findOrFail($id);
        $amnestyService->service_status = 'On Process';
        $amnestyService->delivery_type = $request->deliveryType;
        $amnestyService->delivery_charge = $request->deliveryCharge;
        $amnestyService->fees = $request->fees;
        try {
            $amnestyService->save();
            return back()->withToastSuccess('Successfully Updated.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }
}
