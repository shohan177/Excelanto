<?php

namespace App\Http\Controllers\WelfareCentre;

use App\ChangeEmployerService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class ChangeEmployerServiceController extends Controller
{
    public function requests()
    {
        $changeEmployerServices =  ChangeEmployerService::where('service_status', 'Open')->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.changeOfEmployer.requests', compact('changeEmployerServices'));
    }

    public function payments()
    {
        $changeEmployerServices =  ChangeEmployerService::where('service_status', 'On Process')->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.changeOfEmployer.payments', compact('changeEmployerServices'));
    }

    public function paids()
    {
        $changeEmployerServices =  ChangeEmployerService::where('service_status', 'Paid')->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.changeOfEmployer.paids', compact('changeEmployerServices'));
    }

    public function delivery()
    {
        $changeEmployerServices = ChangeEmployerService::whereIn('service_status', ['Approved','Rejected'])->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.changeOfEmployer.delivery', compact('changeEmployerServices'));
    }

    public function upload($id)
    {
        $changeEmployerService = ChangeEmployerService::findOrFail($id);
        return view('WelfareCentre.WSC_Registered.changeOfEmployer.upload', compact('changeEmployerService'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'fees' => 'required|numeric',
            'deliveryCharge' => 'required|numeric',
        ]);

        $changeEmployerService = ChangeEmployerService::findOrFail($id);
        $changeEmployerService->service_status = 'On Process';
        $changeEmployerService->delivery_type = $request->deliveryType;
        $changeEmployerService->delivery_charge = $request->deliveryCharge;
        $changeEmployerService->fees = $request->fees;
        try {
            $changeEmployerService->save();
            return back()->withToastSuccess('Successfully Updated.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }

    public function viewReceipt($id)
    {
        $changeEmployerService = ChangeEmployerService::findOrFail($id);
        return view('WelfareCentre.WSC_Registered.changeOfEmployer.receipt', compact('changeEmployerService'));
    }

    public function statusUpdete($id)
    {
        $changeEmployerService = ChangeEmployerService::findOrFail($id);
        if ($changeEmployerService->service_status == "On Process") {
            $changeEmployerService->service_status = 'Paid';
        }
        try {
            $changeEmployerService->save();
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
        $changeEmployerService = ChangeEmployerService::findOrFail($id);
        return view('WelfareCentre.WSC_Registered.changeOfEmployer.status', compact('changeEmployerService'));
    }

    public function detailsUpdate(Request $request, $id)
    {
        $request->validate([
            'deliveryType' => 'required',
            'document' => 'mimes:pdf',
        ]);
        $changeEmployerService = ChangeEmployerService::findOrFail($id);

        $changeEmployerService->delivery_type = $request->deliveryStatus;
        $changeEmployerService->delivery_to = $request->deliveryTo;
        $changeEmployerService->service_status = $request->legalStatus;
        
        if ($request->hasFile('document')) {
            $pdf             = $request->file('document');
            $folder_path       = 'uploads/document/';
            $pdf_new_name    = Str::random(20) . '-' . now()->timestamp . '.' . $pdf->getClientOriginalExtension();
            // save to server
            $request->document->move(public_path($folder_path), $pdf_new_name);
            $changeEmployerService->document   = $folder_path . $pdf_new_name;
        }
        try {
            $changeEmployerService->save();
            return back()->withToastSuccess('Successfully Updated.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }
}
