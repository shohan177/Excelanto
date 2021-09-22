<?php

namespace App\Http\Controllers\UAEAdmin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UAEAdminDashboardController extends Controller
{
    public function dashboard(){
        return view('UAEAdmin.welcome');
    }

    public function companyPrfileView(){
        $user = User::find(Auth::user()->id);
        return view('UAEAdmin.profile', compact('user'));
    }
}
