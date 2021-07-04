<?php

namespace App\Http\Controllers\RecruitingAgency;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function new(){
        return view('RecruitingAgency.candidate.new');
    }

    public function all(){
        return view('RecruitingAgency.candidate.all');
    }

    public function selected(){
        return view('RecruitingAgency.candidate.selected');
    }

    public function viewSelected(){
        return view('RecruitingAgency.candidate.viewSelected');
    }


}
