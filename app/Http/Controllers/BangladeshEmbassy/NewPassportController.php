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
        $newPassports = NewPassportService::where('service_status','Forwarded')
                     ->orderBy('id','DESC')->get();
        return view('BangladeshEmbassy.newPassport.approved', compact('newPassports'));
    }

    public function rejected(){
        $newPassports = NewPassportService::where('service_status','Forwarded')
                     ->orderBy('id','DESC')->get();
        return view('BangladeshEmbassy.newPassport.rejected', compact('newPassports'));
    }
}