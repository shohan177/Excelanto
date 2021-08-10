<?php

namespace App\Http\Controllers\OneStopService;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function showCompanyProfile($user_id)
    {
        $user = User::findOrFail($user_id);
        return view('OneStopService.company.profile', compact('user'));
    }
}
