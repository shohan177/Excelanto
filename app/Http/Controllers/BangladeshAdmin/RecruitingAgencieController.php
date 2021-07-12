<?php

namespace App\Http\Controllers\BangladeshAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class RecruitingAgencieController extends Controller
{
    public function company_request(){
        $pendingRequests = User::where('active_status', 'Pending')->get();
        return view('BangladeshAdmin.recruiting_agencies.company_request', compact('pendingRequests'));
    }

    public function company_approved_request(){
        return view('BangladeshAdmin.recruiting_agencies.company_approved_request');
    }

    public function company_rejected_request(){
        return view('BangladeshAdmin.recruiting_agencies.company_rejected_request');
    }
}
