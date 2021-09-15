<?php

namespace App\Http\Controllers\WelfareCentre;

use App\Http\Controllers\Controller;
use App\PaymentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentServiceController extends Controller
{
    public function requests()
    {
        $paymentServices =  PaymentService::where('service_status', 'Open')->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.legalByRegular.requests', compact('paymentServices'));
    }

    public function payments()
    {
        $paymentServices =  PaymentService::where('service_status', 'On Process')->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.legalByRegular.payments', compact('paymentServices'));
    }

    public function paids()
    {
        $paymentServices =  PaymentService::where('service_status', 'Paid')->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.legalByRegular.paids', compact('paymentServices'));
    }

    public function upload($id)
    {
        $paymentService = PaymentService::findOrFail($id);
        return view('WelfareCentre.WSC_Registered.legalByRegular.upload', compact('paymentService'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'fees' => 'required|numeric',
            'deliveryCharge' => 'required|numeric',
        ]);

        $paymentService = PaymentService::findOrFail($id);
        $paymentService->service_status = 'On Process';
        $paymentService->delivery_type = $request->deliveryType;
        $paymentService->delivery_charge = $request->deliveryCharge;
        $paymentService->fees = $request->fees;
        try {
            $paymentService->save();
            return back()->withToastSuccess('Successfully Updated.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }

    public function viewReceipt($id)
    {
        $paymentService = PaymentService::findOrFail($id);
        return view('WelfareCentre.WSC_Registered.legalByRegular.receipt', compact('paymentService'));
    }

    public function statusUpdete($id)
    {
        $paymentService = PaymentService::findOrFail($id);
        if ($paymentService->service_status == "On Process") {
            $paymentService->service_status = 'Paid';
        }
        try {
            $paymentService->save();
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
}
