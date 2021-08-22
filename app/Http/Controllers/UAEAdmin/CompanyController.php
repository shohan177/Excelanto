<?php

namespace App\Http\Controllers\UAEAdmin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function showCompanyProfile($user_id)
    {
        $user = User::findOrFail($user_id);
        return view('UAEAdmin.company.profile', compact('user'));
    }
}
