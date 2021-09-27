<?php

namespace App\Http\Controllers\TravelAgency;

use App\Http\Controllers\Controller;
use App\OfferedCandidate;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;

class TravelTicketsController extends Controller
{
    public function required()
    {
        $offeredCandidates = OfferedCandidate::where('travel_status', 'Pending')->where('travel_agency_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('TravelAgency.TravelTickets.required', compact('offeredCandidates'));
    }

    public function viewStampingApprove($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('TravelAgency.TravelTickets.view-stamping-approve', compact('offeredCandidate'));
    }

    public function booked()
    {
        return view('TravelAgency.TravelTickets.booked');
    }
}
