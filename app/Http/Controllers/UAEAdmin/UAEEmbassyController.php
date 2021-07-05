<?php

namespace App\Http\Controllers\UAEAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UAEEmbassyController extends Controller
{
    public function new(){
        return view('UAEAdmin.UAEEmbassy.new');
    }

    public function approved(){
        return view('UAEAdmin.UAEEmbassy.approved');
    }

    public function rejected(){
        return view('UAEAdmin.UAEEmbassy.rejected');
    }
}
