<?php

namespace App\Http\Controllers\UAEAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployerRequestController extends Controller
{
    public function new(){
        return view('UAEAdmin.employerRequest.new');
    }

    public function approved(){
        return view('UAEAdmin.employerRequest.approved');
    }

    public function rejected(){
        return view('UAEAdmin.employerRequest.rejected');
    }
}
