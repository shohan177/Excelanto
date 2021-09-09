<?php

namespace App\Http\Controllers\WelfareCentre;

use App\Http\Controllers\Controller;
use App\RegistrationCertificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationCertificateController extends Controller
{
    public function requests()
    {
        $registrationCertificates = RegistrationCertificate::where('service_status', 'Open')->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.registrationCertificate.requests', compact('registrationCertificates'));
    }

    public function payment()
    {
        $registrationCertificates = RegistrationCertificate::where('service_status', 'On Process')->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.registrationCertificate.payment', compact('registrationCertificates'));
    }

    public function paids()
    {
        $registrationCertificates = RegistrationCertificate::where('service_status', 'Paid')->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.registrationCertificate.paids', compact('registrationCertificates'));
    }

    public function upload($id)
    {
        $registrationCertificate = RegistrationCertificate::findOrFail($id);
        return view('WelfareCentre.WSC_Registered.registrationCertificate.upload', compact('registrationCertificate'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'fees' => 'required|numeric',
            'deliveryCharge' => 'required|numeric',
        ]);

        $registrationCertificate = RegistrationCertificate::findOrFail($id);
        $registrationCertificate->service_status = 'On Process';
        $registrationCertificate->delivery_type = $request->deliveryType;
        $registrationCertificate->delivery_charge = $request->deliveryCharge;
        $registrationCertificate->fees = $request->fees;
        try {
            $registrationCertificate->save();
            return back()->withToastSuccess('Successfully Updated.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }

    public function statusUpdete($id)
    {
        $registrationCertificate = RegistrationCertificate::findOrFail($id);
        if ($registrationCertificate->service_status == "On Process") {
            $registrationCertificate->service_status = 'Paid';
        }
        try {
            $registrationCertificate->save();
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

    public function viewReceipt($id)
    {
        $registrationCertificate = RegistrationCertificate::findOrFail($id);
        return view('WelfareCentre.WSC_Registered.registrationCertificate.receipt', compact('registrationCertificate'));
    }
}
