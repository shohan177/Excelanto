<?php

namespace App\Http\Controllers\UAEAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UAEAdminDashboardController extends Controller
{
    public function dashboard(){
        return view('UAEAdmin.welcome');
    }
}
