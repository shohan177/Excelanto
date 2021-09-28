<?php

namespace App\Http\Controllers\TravelAgency;

use App\Http\Controllers\Controller;
use App\OfferedCandidate;
use App\SubmittedTravelEnquiry;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;

class QuotationsController extends Controller
{
    public function submitted()
    {
        $submittedTravelEnquiries  = SubmittedTravelEnquiry::orderBy('id', 'DESC')->get();
        return view('TravelAgency.Quotations.submitted', compact('submittedTravelEnquiries'));
    }

    public function view($id)
    {
        $submittedTravelEnquiry = SubmittedTravelEnquiry::findOrFail($id);
        return view('TravelAgency.Quotations.view', compact('submittedTravelEnquiry'));
    }

    public function viewApproved($id)
    {
        $submittedTravelEnquiry = SubmittedTravelEnquiry::findOrFail($id);
        return view('TravelAgency.Quotations.view-approved', compact('submittedTravelEnquiry'));
    }

    public function viewTravelCandidates($id)
    {
        $offeredCandidates = OfferedCandidate::where('travel_status', 'Ticket-Issued')->where('travel_agency_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        $submittedTravelEnquiry = SubmittedTravelEnquiry::findOrFail($id);
        return view('TravelAgency.Quotations.view-travel-candidates', compact('offeredCandidates'));
    }

    public function approved()
    {
        $submittedTravelEnquiries  = SubmittedTravelEnquiry::where('submitted_status', 'Approved')->orderBy('id', 'DESC')->get();
        return view('TravelAgency.Quotations.approved', compact('submittedTravelEnquiries'));
    }
}
