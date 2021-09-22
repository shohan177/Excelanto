<?php

namespace App\Http\Controllers\WelfareCentre;

use App\Http\Controllers\Controller;
use App\RegistrationCertificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

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

    public function delivered()
    {
        $registrationCertificates = RegistrationCertificate::whereIn('service_status',['Rejected','Approved'])->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.registrationCertificate.delivered', compact('registrationCertificates'));
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

    public function status($id)
    {
        $registrationCertificate = RegistrationCertificate::findOrFail($id);
        return view('WelfareCentre.WSC_Registered.registrationCertificate.status', compact('registrationCertificate'));
    }

    public function detailsUpdate(Request $request, $id)
    {
        $request->validate([
            'deliveryType' => 'required',
            'document' => 'mimes:pdf',
        ]);
        $registrationCertificate = RegistrationCertificate::findOrFail($id);

        $registrationCertificate->delivery_type = $request->deliveryStatus;
        $registrationCertificate->delivery_to = $request->deliveryTo;
        $registrationCertificate->service_status = $request->legalStatus;
        
        if ($request->hasFile('document')) {
            $pdf             = $request->file('document');
            $folder_path       = 'uploads/document/';
            $pdf_new_name    = Str::random(20) . '-' . now()->timestamp . '.' . $pdf->getClientOriginalExtension();
            // save to server
            $request->document->move(public_path($folder_path), $pdf_new_name);
            $registrationCertificate->document   = $folder_path . $pdf_new_name;
        }
        try {
            $registrationCertificate->save();
            return back()->withToastSuccess('Successfully Updated.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }
}
