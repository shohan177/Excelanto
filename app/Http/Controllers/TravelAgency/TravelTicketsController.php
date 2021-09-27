<?php

namespace App\Http\Controllers\TravelAgency;

use App\Http\Controllers\Controller;
use App\OfferedCandidate;
use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
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

    public function viewBookedCandidate($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('TravelAgency.TravelTickets.view-booked-candidate', compact('offeredCandidate'));
    }

    public function addTicket($offered_candidate_id){
        $offeredCandidate = OfferedCandidate::findOrFail($offered_candidate_id);
        return view('TravelAgency.TravelTickets.add-ticket', compact('offeredCandidate'));
    }

    public function ticketStore(Request $request, $offered_candidate_id){
        $request->validate([
            'ticket' =>  'mimes:pdf',
        ]);

        $offeredCandidate = OfferedCandidate::FindOrFail($offered_candidate_id);

        $offeredCandidate->date_of_journey      = $request->dateOfJounrey;
        $offeredCandidate->flight_number        = $request->flightNumber;
        $offeredCandidate->ticket_cost          = $request->ticketCost;
        $offeredCandidate->travel_status        = 'Ticket-Issued';

        if ($request->hasFile('ticket')) {
            $pdf             = $request->file('ticket');
            $folder_path       = 'uploads/tickets/';
            $pdf_new_name    = Str::random(20) . '-' . now()->timestamp . '.' . $pdf->getClientOriginalExtension();
            // save to server
            $request->ticket->move(public_path($folder_path), $pdf_new_name);
            $offeredCandidate->ticket_pdf   = $folder_path . $pdf_new_name;
        }

        try {
            $offeredCandidate->save();
            return back()->withToastSuccess('Successfully saved.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }

    public function booked()
    {
        $offeredCandidates = OfferedCandidate::where('travel_status', 'Ticket-Issued')->where('travel_agency_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('TravelAgency.TravelTickets.booked', compact('offeredCandidates'));
    }
}
