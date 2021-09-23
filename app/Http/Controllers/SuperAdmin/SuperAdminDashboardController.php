<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuperAdminDashboardController extends Controller
{
    public function dashboard(){

        return view('SuperAdmin.welcome');
    }

    public function companyPrfileView(){
        $user = User::find(Auth::user()->id);
        return view('SuperAdmin.profile', compact('user'));
    }
}
