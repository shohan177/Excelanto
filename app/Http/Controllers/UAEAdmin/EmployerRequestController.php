<?php

namespace App\Http\Controllers\UAEAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class EmployerRequestController extends Controller
{
    public function new(){
        $users = User::where('user_type','employer-company')->where('active_status', 'Pending')->get();
        return view('UAEAdmin.employerRequest.new', compact('users'));
    }

    public function approved(){
        $users = User::where('user_type','employer-company')->where('active_status', 'Approved')->get();
        return view('UAEAdmin.employerRequest.approved', compact('users'));
    }

    public function rejected(){
        $users = User::where('user_type','employer-company')->where('active_status', 'Rejected')->get();
        return view('UAEAdmin.employerRequest.rejected', compact('users'));
    }

    public function edit($id){
        $user = User::findOrFail($id);
        return view('UAEAdmin.employerRequest.edit', compact('users'));
    }
}
