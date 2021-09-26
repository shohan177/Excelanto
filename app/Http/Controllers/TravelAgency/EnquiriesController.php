<?php

namespace App\Http\Controllers\TravelAgency;

use App\Http\Controllers\Controller;
use App\TravelEnquiry;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;

class EnquiriesController extends Controller
{
    public function new()
    {
        $travelEnquiries = TravelEnquiry::where('enquiry_status', 'New')->orderBy('id', 'DESC')->get();
        return view('TravelAgency.Enquiries.new', compact('travelEnquiries'));
    }
    public function expired()
    {
        return view('TravelAgency.Enquiries.expired');
    }

    public function view($id){
        $travelEnquiry = TravelEnquiry::findOrFail($id);
        $user = User::find($travelEnquiry->oss_id);
        return view('TravelAgency.Enquiries.view', compact('travelEnquiry','user'));
    }
}
