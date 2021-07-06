<?php

namespace App\Http\Controllers\OneStopService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OneStopServiceDashboardController extends Controller
{
    public function dashboard(){
        return view('OneStopService.welcome');
    }
}
