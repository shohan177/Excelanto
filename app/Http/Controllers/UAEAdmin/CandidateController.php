<?php

namespace App\Http\Controllers\UAEAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function travelReceived(){
        return view('UAEAdmin.candidate.travel-received');
    }
}
