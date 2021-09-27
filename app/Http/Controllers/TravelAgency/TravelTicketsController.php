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
    public function required()
    {
        return view('TravelAgency.TravelTickets.required');
    }

    public function booked()
    {
        return view('TravelAgency.TravelTickets.booked');
    }
}
