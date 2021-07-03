<?php

namespace App\Http\Controllers\BangladeshAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BangladeshAdminDashboardController extends Controller
{
    public function dashboard(){

        return view('BangladeshAdmin.welcome');
    }
}
