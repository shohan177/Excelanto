<?php

namespace App\Http\Controllers\WelfareCentre;

use App\Http\Controllers\Controller;
use App\IssuanceCertificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IssuanceCertificateController extends Controller
{
    public function requests()
    {
        $issuanceCertificates = IssuanceCertificate::where('service_status', 'Open')->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.IssuanceCertificate.requests', compact('issuanceCertificates'));
    }

    public function paids()
    {
        return view('WelfareCentre.WSC_Registered.IssuanceCertificate.paids');
    }

    // public function status($id)
    // {
    //     $issuanceCertificate = IssuanceCertificate::findOrFail($id);
    //     return view('WelfareCentre.WSC_Registered.issuanceCertificate.status', compact('issuanceCertificate'));
    // }

    public function statusUpdete($id)
    {
        $issuanceCertificate = IssuanceCertificate::findOrFail($id);
        if($issuanceCertificate->service_status == "On Process"){
            $issuanceCertificate->service_status = 'Paid';
        }
        try {
            $issuanceCertificate->save();
            return response()->json([
                'type' => 'success',
                'message' => 'Successfully Updated'
            ]);
        }catch (\Exception $exception){
            return response()->json([
                'type' => 'error',
                'message' => $exception->getMessage()
            ]);
        }
    }

    public function upload($id){
        $issuanceCertificate = IssuanceCertificate::findOrFail($id);
        return view('WelfareCentre.WSC_Registered.issuanceCertificate.upload', compact('issuanceCertificate'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'fees' => 'required|numeric'
        ]);

        $issuanceCertificate = IssuanceCertificate::findOrFail($id);
        $issuanceCertificate->service_status = 'On Process';
        $issuanceCertificate->delivery_type = $request->deliveryType;
        $issuanceCertificate->delivery_charge = $request->deliveryCharge;
        $issuanceCertificate->fees = $request->fees;
        try {
            $issuanceCertificate->save();
            return back()->withToastSuccess('Successfully Updated.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }

    public function payment()
    {
        $issuanceCertificates = IssuanceCertificate::where('service_status', 'On Process')->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.IssuanceCertificate.payment', compact('issuanceCertificates'));
    }

    public function viewIssuanceReceipt($id){
        $issuanceCertificate = IssuanceCertificate::findOrFail($id);
        return view('WelfareCentre.WSC_Registered.issuanceCertificate.receipt', compact('issuanceCertificate'));
    }
}
