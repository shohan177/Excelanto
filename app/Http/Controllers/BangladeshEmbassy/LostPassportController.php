<?php

namespace App\Http\Controllers\BangladeshEmbassy;

use App\Http\Controllers\Controller;
use App\LostPassportService;
use Illuminate\Http\Request;

class LostPassportController extends Controller
{
    public function request(){
        $lostPassports = LostPassportService::where('service_status','Forwarded')
                     ->orderBy('id','DESC')->get();
        return view('BangladeshEmbassy.lostPassport.request', compact('lostPassports'));
    }

    public function approved(){
        $lostPassports = LostPassportService::where('service_status','Approved')
                     ->orderBy('id','DESC')->get();
        return view('BangladeshEmbassy.lostPassport.approved', compact('lostPassports'));
    }

    public function rejected(){
        $lostPassports = LostPassportService::where('service_status','Rejected')
                     ->orderBy('id','DESC')->get();
        return view('BangladeshEmbassy.lostPassport.rejected', compact('lostPassports'));
    }

    public function status($lost_passport_service_id){
        $lostPassport = LostPassportService::FindOrFail($lost_passport_service_id);
        return view('BangladeshEmbassy.lostPassport.status', compact('lostPassport'));
    }

    public function statusUpdate (Request $request , $id){
        $lostPassport = LostPassportService::FindOrFail($request->id);
        $lostPassport->service_status = $request->serviceStatus;
        $lostPassport->reject_reason = $request->reject_reason;
        $lostPassport->save();
        try {
            $lostPassport->save();
            return back()->withToastSuccess('Successfully saved.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }
}
