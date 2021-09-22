<?php

namespace App\Http\Controllers\WelfareCentre;

use App\Http\Controllers\Controller;
use App\LostPassportService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

class LostPassportServiceController extends Controller
{
    public function requests()
    {
        $lostPassportServices =  LostPassportService::where('service_status', 'Open')->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.lostPassport.requests', compact('lostPassportServices'));
    }

    public function payments()
    {
        $lostPassportServices =  LostPassportService::where('service_status', 'On Process')->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.lostPassport.payments', compact('lostPassportServices'));
    }

    public function status()
    {
        $lostPassportServices =  LostPassportService::where('service_status','!=',['On Process','Open'])->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.lostPassport.status', compact('lostPassportServices'));
    }

    public function delivery()
    {
        $lostPassportServices = LostPassportService::where('delivery_status','!=', null)->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.lostPassport.delivery', compact('lostPassportServices'));
    }

    public function upload($id)
    {
        $lostPassportService = LostPassportService::findOrFail($id);
        return view('WelfareCentre.WSC_Registered.lostPassport.upload', compact('lostPassportService'));
    }

    public function deliveryStatus($id)
    {
        $lostPassportService = LostPassportService::findOrFail($id);
        return view('WelfareCentre.WSC_Registered.lostPassport.delivery-status', compact('lostPassportService'));
    }

    public function viewReceipt($id)
    {
        $lostPassportService = LostPassportService::findOrFail($id);
        return view('WelfareCentre.WSC_Registered.lostPassport.receipt', compact('lostPassportService'));
    }

    public function statusUpdete($id)
    {
        $lostPassportService = LostPassportService::findOrFail($id);
        if ($lostPassportService->service_status == "On Process") {
            $lostPassportService->service_status = 'Paid';
        }
        try {
            $lostPassportService->save();
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
        ]);

        $lostPassportService = LostPassportService::findOrFail($id);
        $lostPassportService->service_status = 'On Process';
        $lostPassportService->delivery_type = $request->deliveryType;
        $lostPassportService->fees = $request->fees;

        try {
            $lostPassportService->save();
            return back()->withToastSuccess('Successfully Updated.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }

    public function detailsUpdate(Request $request, $id)
    {
        $request->validate([
            'deliveryType' => 'required',
            'deliveryStatus' => 'required',
            'passport' => 'mimes:pdf',
        ]);

        $lostPassportService = LostPassportService::findOrFail($id);

        $lostPassportService->delivery_status = $request->deliveryStatus;
        $lostPassportService->delivery_to = $request->deliveryTo;

        if ($request->hasFile('passport')) {
            $pdf             = $request->file('passport');
            $folder_path       = 'uploads/passport/';
            $pdf_new_name    = Str::random(20) . '-' . now()->timestamp . '.' . $pdf->getClientOriginalExtension();
            // save to server
            $request->passport->move(public_path($folder_path), $pdf_new_name);
            $lostPassportService->new_passport   = $folder_path . $pdf_new_name;
        }

        try {
            $lostPassportService->save();
            return back()->withToastSuccess('Successfully Updated.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }
}
