<?php

namespace App\Http\Controllers\UAEAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisaRequestController extends Controller
{
    public function requested(){
        return view('UAEAdmin.visa.requested');
    }

    public function approved(){
        return view('UAEAdmin.visa.approved');
    }

    public function rejected(){
        return view('UAEAdmin.visa.rejected');
    }
}
