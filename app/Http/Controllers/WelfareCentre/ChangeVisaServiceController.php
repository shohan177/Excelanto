<?php

namespace App\Http\Controllers\WelfareCentre;

use App\ChangeVisaService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class ChangeVisaServiceController extends Controller
{
    public function requests()
    {
        $changeVisaServices =  ChangeVisaService::where('service_status', 'Open')->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.changeOfVisa.requests', compact('changeVisaServices'));
    }

    public function payments()
    {
        $changeVisaServices =  ChangeVisaService::where('service_status', 'On Process')->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.changeOfVisa.payments', compact('changeVisaServices'));
    }

    public function paids()
    {
        $changeVisaServices =  ChangeVisaService::where('service_status', 'Paid')->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.changeOfVisa.paids', compact('changeVisaServices'));
    }

    public function delivery()
    {
        $changeVisaServices = ChangeVisaService::whereIn('service_status', ['Approved','Rejected'])->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.changeOfVisa.delivery', compact('changeVisaServices'));
    }

    public function upload($id)
    {
        $changeVisaService = ChangeVisaService::findOrFail($id);
        return view('WelfareCentre.WSC_Registered.changeOfVisa.upload', compact('changeVisaService'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'fees' => 'required|numeric',
            'deliveryCharge' => 'required|numeric',
        ]);

        $changeVisaService = ChangeVisaService::findOrFail($id);
        $changeVisaService->service_status = 'On Process';
        $changeVisaService->delivery_type = $request->deliveryType;
        $changeVisaService->delivery_charge = $request->deliveryCharge;
        $changeVisaService->fees = $request->fees;
        try {
            $changeVisaService->save();
            return back()->withToastSuccess('Successfully Updated.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }

    public function viewReceipt($id)
    {
        $changeVisaService = ChangeVisaService::findOrFail($id);
        return view('WelfareCentre.WSC_Registered.changeOfVisa.receipt', compact('changeVisaService'));
    }

    public function statusUpdete($id)
    {
        $changeVisaService = ChangeVisaService::findOrFail($id);
        if ($changeVisaService->service_status == "On Process") {
            $changeVisaService->service_status = 'Paid';
        }
        try {
            $changeVisaService->save();
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

    public function status($id)
    {
        $changeVisaService = ChangeVisaService::findOrFail($id);
        return view('WelfareCentre.WSC_Registered.changeOfVisa.status', compact('changeVisaService'));
    }

    public function detailsUpdate(Request $request, $id)
    {
        $request->validate([
            'deliveryType' => 'required',
            'document' => 'mimes:pdf',
        ]);
        $changeVisaService = ChangeVisaService::findOrFail($id);

        $changeVisaService->delivery_type = $request->deliveryStatus;
        $changeVisaService->delivery_to = $request->deliveryTo;
        $changeVisaService->service_status = $request->legalStatus;
        
        if ($request->hasFile('document')) {
            $pdf             = $request->file('document');
            $folder_path       = 'uploads/document/';
            $pdf_new_name    = Str::random(20) . '-' . now()->timestamp . '.' . $pdf->getClientOriginalExtension();
            // save to server
            $request->document->move(public_path($folder_path), $pdf_new_name);
            $changeVisaService->document   = $folder_path . $pdf_new_name;
        }
        try {
            $changeVisaService->save();
            return back()->withToastSuccess('Successfully Updated.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }
}
