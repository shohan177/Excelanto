<?php

namespace App\Http\Controllers\WelfareCentre;

use App\AmnestyService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

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

    public function paids()
    {
        $amnestyServices = AmnestyService::where('service_status', 'Paid')->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.legalByGovt.paids', compact('amnestyServices'));
    }

    public function delivery()
    {
        $amnestyServices = AmnestyService::whereIn('service_status', ['Approved','Rejected'])->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.legalByGovt.delivery', compact('amnestyServices'));
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

    public function status($id)
    {
        $amnestyService = AmnestyService::findOrFail($id);
        return view('WelfareCentre.WSC_Registered.legalByGovt.status', compact('amnestyService'));
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

    public function detailsUpdate(Request $request, $id)
    {
        $request->validate([
            'deliveryType' => 'required',
            'document' => 'mimes:pdf',
        ]);
        $amnestyService = AmnestyService::findOrFail($id);

        $amnestyService->delivery_type = $request->deliveryStatus;
        $amnestyService->delivery_to = $request->deliveryTo;
        $amnestyService->service_status = $request->legalStatus;
        
        if ($request->hasFile('document')) {
            $pdf             = $request->file('document');
            $folder_path       = 'uploads/document/';
            $pdf_new_name    = Str::random(20) . '-' . now()->timestamp . '.' . $pdf->getClientOriginalExtension();
            // save to server
            $request->document->move(public_path($folder_path), $pdf_new_name);
            $amnestyService->document   = $folder_path . $pdf_new_name;
        }
        try {
            $amnestyService->save();
            return back()->withToastSuccess('Successfully Updated.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }

}
