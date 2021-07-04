<?php

namespace App\Http\Controllers\RecruitingAgency;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobPostController extends Controller
{
    public function all(){
        return view('RecruitingAgency.jobPost.all');
    }

    public function applied(){
        return view('RecruitingAgency.jobPost.applied');
    }
}
