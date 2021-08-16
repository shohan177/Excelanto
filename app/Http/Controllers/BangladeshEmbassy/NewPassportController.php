<?php

namespace App\Http\Controllers\BangladeshEmbassy;

use App\Http\Controllers\Controller;
use App\NewPassportService;
use Illuminate\Http\Request;

class NewPassportController extends Controller
{
    public function request(){
        $newPassports = NewPassportService::where('service_status','Forwarded')
                     ->orderBy('id','DESC')->get();
        return view('BangladeshEmbassy.newPassport.request', compact('newPassports'));
    }

    public function approved(){
        $newPassports = NewPassportService::where('service_status','Approved')
                     ->orderBy('id','DESC')->get();
        return view('BangladeshEmbassy.newPassport.approved', compact('newPassports'));
    }

    public function rejected(){
        $newPassports = NewPassportService::where('service_status','Rejected')
                     ->orderBy('id','DESC')->get();
        return view('BangladeshEmbassy.newPassport.rejected', compact('newPassports'));
    }

    public function status($new_passport_service_id){
        $newPassport = NewPassportService::FindOrFail($new_passport_service_id);
        return view('BangladeshEmbassy.newPassport.status', compact('newPassport'));
    }

    public function statusUpdate (Request $request , $id){
        $newPassport = NewPassportService::FindOrFail($request->id);
        $newPassport->service_status = $request->serviceStatus;
        $newPassport->reject_reason = $request->reject_reason;
        $newPassport->save();
        try {
            $newPassport->save();
            return back()->withToastSuccess('Successfully saved.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }
}