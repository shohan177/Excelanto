<?php

namespace App\Http\Controllers\UaeEmbassy;

use App\Http\Controllers\Controller;
use App\OfferedCandidate;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;

class VisaProcessController extends Controller
{
    public function stamping_requested()
    {
        $offeredCandidates = OfferedCandidate::where('result_status', 'Visa-Stamping-Request')->orderBy('id', 'DESC')->get();
        return view('UaeEmbassy.VisaProcess.stamping_requested', compact('offeredCandidates'));
    }
    public function stamping_approved()
    {
        return view('UaeEmbassy.VisaProcess.stamping_approved');
    }
    public function stamping_rejected()
    {
        return view('UaeEmbassy.VisaProcess.stamping_rejected');
    }
}
