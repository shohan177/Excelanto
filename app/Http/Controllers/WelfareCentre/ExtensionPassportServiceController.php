<?php

namespace App\Http\Controllers\WelfareCentre;

use App\ExtensionPassportService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

class ExtensionPassportServiceController extends Controller
{
    public function requests()
    {
        $extensionPassportServices =  ExtensionPassportService::where('service_status', 'Open')->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.extensionPassport.requests', compact('extensionPassportServices'));
    }

    public function payments()
    {
        $extensionPassportServices =  ExtensionPassportService::where('service_status', 'On Process')->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.extensionPassport.payments', compact('extensionPassportServices'));
    }

    public function status()
    {
        $extensionPassportServices =  ExtensionPassportService::where('service_status','!=',['On Process','Open'])->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.extensionPassport.status', compact('extensionPassportServices'));
    }

    public function delivery()
    {
        $extensionPassportServices = ExtensionPassportService::where('delivery_status','!=', null)->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.extensionPassport.delivery', compact('extensionPassportServices'));
    }

    public function upload($id)
    {
        $extensionPassportService = ExtensionPassportService::findOrFail($id);
        return view('WelfareCentre.WSC_Registered.extensionPassport.upload', compact('extensionPassportService'));
    }

    public function viewReceipt($id)
    {
        $extensionPassportService = ExtensionPassportService::findOrFail($id);
        return view('WelfareCentre.WSC_Registered.extensionPassport.receipt', compact('extensionPassportService'));
    }

    public function deliveryStatus($id)
    {
        $extensionPassportService = ExtensionPassportService::findOrFail($id);
        return view('WelfareCentre.WSC_Registered.extensionPassport.delivery-status', compact('extensionPassportService'));
    }

    public function statusUpdete($id)
    {
        $extensionPassportService = ExtensionPassportService::findOrFail($id);
        if ($extensionPassportService->service_status == "On Process") {
            $extensionPassportService->service_status = 'Paid';
        }
        try {
            $extensionPassportService->save();
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

    public function update(Request $request, $id)
    {
        $request->validate([
            'fees' => 'required|numeric',
            'passport' => 'mimes:pdf',
        ]);

        $extensionPassportService = ExtensionPassportService::findOrFail($id);
        $extensionPassportService->service_status = 'On Process';
        $extensionPassportService->delivery_type = $request->deliveryType;
        $extensionPassportService->fees = $request->fees;

        try {
            $extensionPassportService->save();
            return back()->withToastSuccess('Successfully Updated.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }

    public function detailsUpdate(Request $request, $id)
    {
        $request->validate([
            'deliveryStatus'=> 'required',
            'passport'      => 'mimes:pdf',
        ]);

        $extensionPassportService = ExtensionPassportService::findOrFail($id);

        $extensionPassportService->delivery_status = $request->deliveryStatus;
        $extensionPassportService->delivery_to = $request->deliveryTo;

        if ($request->hasFile('passport')) {
            $pdf             = $request->file('passport');
            $folder_path       = 'uploads/passport/';
            $pdf_new_name    = Str::random(20) . '-' . now()->timestamp . '.' . $pdf->getClientOriginalExtension();
            // save to server
            $request->passport->move(public_path($folder_path), $pdf_new_name);
            $extensionPassportService->new_passport   = $folder_path . $pdf_new_name;
        }

        try {
            $extensionPassportService->save();
            return back()->withToastSuccess('Successfully Updated.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }
}
