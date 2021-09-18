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

    public function paids()
    {
        $newPassportServices =  NewPassportService::where('service_status', 'Paid')->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.newPassport.paids', compact('newPassportServices'));
    }

    public function delivery()
    {
        $newPassportServices = NewPassportService::whereIn('service_status', ['Approved','Rejected'])->where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.newPassport.delivery', compact('newPassportServices'));
    }

    public function upload($id)
    {
        $newPassportService = NewPassportService::findOrFail($id);
        return view('WelfareCentre.WSC_Registered.newPassport.upload', compact('newPassportService'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'fees' => 'required|numeric',
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
            $image             = $request->file('biometric');
            $folder_path       = 'uploads/biometric/';
            $image_new_name    = Str::random(20) . '-' . now()->timestamp . '.' . $image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path . $image_new_name);
            $newPassportService->biometric   = $folder_path . $image_new_name;
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
        ]);
        $newPassportService = NewPassportService::findOrFail($id);

        $newPassportService->delivery_type = $request->deliveryStatus;
        $newPassportService->delivery_to = $request->deliveryTo;
        $newPassportService->service_status = $request->legalStatus;
        if ($request->hasFile('document')) {
            $image = $request->file('document');
            $folder_path = 'uploads/document/';
            $image_new_name = Str::random(20) . '-' . now()->timestamp . '.' . $image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path . $image_new_name);
            $newPassportService->document = $folder_path . $image_new_name;
        }
        try {
            $newPassportService->save();
            return back()->withToastSuccess('Successfully Updated.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }
}
