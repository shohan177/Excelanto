<?php

namespace App\Http\Controllers\EmployerCompany;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployerCompanyDashboardController extends Controller
{
    public function dashboard(){
        return view('EmployerCompany.dashboard');
    }
}
