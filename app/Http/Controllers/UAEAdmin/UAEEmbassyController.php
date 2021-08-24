<?php

namespace App\Http\Controllers\UAEAdmin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UAEEmbassyController extends Controller
{
    public function new(){
        $users = User::where('user_type','uae-embassy')->where('active_status', 'Pending')->orderBy('id','DESC')->get();
        return view('UAEAdmin.UAEEmbassy.new', compact('users'));
    }

    public function approved(){
        $users = User::where('user_type','uae-embassy')->where('active_status', 'Approved')->orderBy('id','DESC')->get();
        return view('UAEAdmin.UAEEmbassy.approved', compact('users'));
    }

    public function rejected(){
        $users = User::where('user_type','uae-embassy')->where('active_status', 'Rejected')->orderBy('id','DESC')->get();
        return view('UAEAdmin.UAEEmbassy.rejected', compact('users'));
    }
}
