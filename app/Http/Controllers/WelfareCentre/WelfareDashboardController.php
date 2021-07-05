<?php

namespace App\Http\Controllers\WelfareCentre;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelfareDashboardController extends Controller
{
    public function dashboard(){
        return view('WelfareCentre.dashboard');
    }
}
