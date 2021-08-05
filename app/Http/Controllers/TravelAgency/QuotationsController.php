<?php

namespace App\Http\Controllers\TravelAgency;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;

class QuotationsController extends Controller
{
    public function submitted_quotations(){

            return view('TravelAgency.Quotations.submitted');
    }
    public function approved_quotations(){
        return view('TravelAgency.Quotations.approved');
    }

}
