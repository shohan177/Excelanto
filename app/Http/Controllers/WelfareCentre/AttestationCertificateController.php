<?php

namespace App\Http\Controllers\WelfareCentre;

use App\AttestationCertificate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AttestationCertificateController extends Controller
{
    public function requests()
    {
        $attestationCertificates = AttestationCertificate::where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.attestationCertificate.requests', compact('attestationCertificates'));
    }

    public function upload($id)
    {
        $attestationCertificate = AttestationCertificate::findOrFail($id);
        return view('WelfareCentre.WSC_Registered.attestationCertificate.upload', compact('attestationCertificate'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'fees' => 'required|numeric',
            'deliveryCharge' => 'required|numeric',
        ]);

        $attestationCertificate = AttestationCertificate::findOrFail($id);
        $attestationCertificate->service_status = 'On Process';
        $attestationCertificate->delivery_type = $request->deliveryType;
        $attestationCertificate->delivery_charge = $request->deliveryCharge;
        $attestationCertificate->fees = $request->fees;
        try {
            $attestationCertificate->save();
            return back()->withToastSuccess('Successfully Updated.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }
}
