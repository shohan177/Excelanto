<?php

namespace App\Http\Controllers\UAEAdmin;

use App\Http\Controllers\Controller;
use App\OfferedCandidate;
use Illuminate\Http\Request;

class VisaRequestController extends Controller
{
    public function requested(){
        $offeredCandidates = OfferedCandidate::where('result_status',
        'Visa-Applied')->orderBy('id','DESC')->get();
        return view('UAEAdmin.visa.requested', compact('offeredCandidates'));
    }

    public function approved(){
        return view('UAEAdmin.visa.approved');
    }

    public function rejected(){
        return view('UAEAdmin.visa.rejected');
    }
}
