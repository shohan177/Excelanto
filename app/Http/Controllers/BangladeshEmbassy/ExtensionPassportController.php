<?php

namespace App\Http\Controllers\BangladeshEmbassy;

use App\ExtensionPassportService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExtensionPassportController extends Controller
{
    public function request(){
        $extensionPassports = ExtensionPassportService::where('service_status','Forwarded')
                     ->orderBy('id','DESC')->get();
        return view('BangladeshEmbassy.extensionPassport.request', compact('extensionPassports'));
    }

    public function approved(){
        $extensionPassports = ExtensionPassportService::where('service_status','Approved')
                     ->orderBy('id','DESC')->get();
        return view('BangladeshEmbassy.extensionPassport.approved', compact('extensionPassports'));
    }

    public function rejected(){
        $extensionPassports = ExtensionPassportService::where('service_status','Rejected')
                     ->orderBy('id','DESC')->get();
        return view('BangladeshEmbassy.extensionPassport.rejected', compact('extensionPassports'));
    }

    public function status($lost_passport_service_id){
        $extensionPassport = ExtensionPassportService::FindOrFail($lost_passport_service_id);
        return view('BangladeshEmbassy.extensionPassport.status', compact('extensionPassport'));
    }

    public function statusUpdate (Request $request , $id){
        $extensionPassport = ExtensionPassportService::FindOrFail($request->id);
        $extensionPassport->service_status = $request->serviceStatus;
        $extensionPassport->reject_reason = $request->reject_reason;
        $extensionPassport->save();
        try {
            $extensionPassport->save();
            return back()->withToastSuccess('Successfully saved.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }
}
