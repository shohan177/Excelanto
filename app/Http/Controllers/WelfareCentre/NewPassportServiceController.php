<?php

namespace App\Http\Controllers\WelfareCentre;

use App\Http\Controllers\Controller;
use App\NewPassportService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

class NewPassportServiceController extends Controller
{
    public function requests()
    {
        $newPassportServices =  NewPassportService::where('service_status', 'Open')->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.newPassport.requests', compact('newPassportServices'));
    }

    public function payments()
    {
        $newPassportServices =  NewPassportService::where('service_status', 'On Process')->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.newPassport.payments', compact('newPassportServices'));
    }

    public function status()
    {
        $newPassportServices =  NewPassportService::where('service_status','!=',['On Process','Open'])->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.newPassport.status', compact('newPassportServices'));
    }

    public function delivery()
    {
        $newPassportServices = NewPassportService::where('delivery_status','!=', null)->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.newPassport.delivery', compact('newPassportServices'));
    }

    public function upload($id)
    {
        $newPassportService = NewPassportService::findOrFail($id);
        return view('WelfareCentre.WSC_Registered.newPassport.upload', compact('newPassportService'));
    }

    public function deliveryStatus($id)
    {
        $newPassportService = NewPassportService::findOrFail($id);
        return view('WelfareCentre.WSC_Registered.newPassport.delivery-status', compact('newPassportService'));
    }

    public function viewReceipt($id)
    {
        $newPassportService = NewPassportService::findOrFail($id);
        return view('WelfareCentre.WSC_Registered.newPassport.receipt', compact('newPassportService'));
    }

    public function statusUpdete($id)
    {
        $newPassportService = NewPassportService::findOrFail($id);
        if ($newPassportService->service_status == "On Process") {
            $newPassportService->service_status = 'Paid';
        }
        try {
            $newPassportService->save();
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
            'biometric' =>'mimes:pdf',
            'photo' =>'image',
        ]);

        $newPassportService = NewPassportService::findOrFail($id);
        $newPassportService->service_status = 'On Process';
        $newPassportService->delivery_type = $request->deliveryType;
        $newPassportService->fees = $request->fees;

        if ($request->hasFile('photo')) {
            $image             = $request->file('photo');
            $folder_path       = 'uploads/profile/';
            $image_new_name    = Str::random(20) . '-' . now()->timestamp . '.' . $image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path . $image_new_name);
            $newPassportService->photo   = $folder_path . $image_new_name;
        }

        if ($request->hasFile('biometric')) {
            $pdf             = $request->file('biometric');
            $folder_path       = 'uploads/biometric/';
            $pdf_new_name    = Str::random(20) . '-' . now()->timestamp . '.' . $pdf->getClientOriginalExtension();
            // save to server
            $request->biometric->move(public_path($folder_path), $pdf_new_name);
            $newPassportService->biometric   = $folder_path . $pdf_new_name;
        }

        try {
            $newPassportService->save();
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

        $newPassportService = NewPassportService::findOrFail($id);

        $newPassportService->delivery_status = $request->deliveryStatus;
        $newPassportService->delivery_to = $request->deliveryTo;

        if ($request->hasFile('passport')) {
            $pdf             = $request->file('passport');
            $folder_path       = 'uploads/passport/';
            $pdf_new_name    = Str::random(20) . '-' . now()->timestamp . '.' . $pdf->getClientOriginalExtension();
            // save to server
            $request->passport->move(public_path($folder_path), $pdf_new_name);
            $newPassportService->new_passport   = $folder_path . $pdf_new_name;
        }

        try {
            $newPassportService->save();
            return back()->withToastSuccess('Successfully Updated.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }
}
