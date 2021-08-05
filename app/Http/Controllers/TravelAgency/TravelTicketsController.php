<?php

namespace App\Http\Controllers\TravelAgency;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;

class TravelTicketsController extends Controller
{
    public function travel_required(){

            return view('TravelAgency.TravelTickets.travel_required');
    }
    public function travel_booked(){
        return view('TravelAgency.TravelTickets.travel_booked');
    }
}
