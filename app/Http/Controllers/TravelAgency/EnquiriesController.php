<?php

namespace App\Http\Controllers\TravelAgency;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;

class EnquiriesController extends Controller
{
    public function new_enquiries(){

            return view('TravelAgency.Enquiries.new');
    }
    public function expired_enquiries(){
        return view('TravelAgency.Enquiries.expired');
    }
}
