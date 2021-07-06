<?php

namespace App\Http\Controllers\OneStopService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function selected(){
        return view('OneStopService.candidate.selected');
    }

    public function interview(){
        return view('OneStopService.candidate.interview');
    }

    public function finalized(){
        return view('OneStopService.candidate.finalized');
    }

    public function ticketBooked(){
        return view('OneStopService.candidate.ticketBooked');
    }
}
