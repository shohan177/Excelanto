<?php

namespace App\Http\Controllers\EmployerCompany;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisaProcessController extends Controller
{
    public function visa_required(){
        return view('EmployerCompany.VisaProcess.visa_required');
    }
    public function visa_requested(){
        return view('EmployerCompany.VisaProcess.visa_requested');
    }

    public function visa_approved(){
        return view('EmployerCompany.VisaProcess.visa_approved');
    }

    public function visa_rejected(){
        return view('EmployerCompany.VisaProcess.visa_rejected');
    }
}
