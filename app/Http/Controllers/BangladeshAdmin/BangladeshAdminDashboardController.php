<?php

namespace App\Http\Controllers\BangladeshAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class BangladeshAdminDashboardController extends Controller
{
    public function dashboard(){

        return view('BangladeshAdmin.welcome');
    }

    public function companyPrfileView(){
        $user = User::find(Auth::user()->id);
        return view('BangladeshAdmin.profile', compact('user'));
    }
}
