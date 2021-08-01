<?php

namespace App\Http\Controllers\UAEAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Whoops\Run;

class EmployerRequestController extends Controller
{
    public function new(){
        $users = User::where('user_type','employer-company')->where('active_status', 'Pending')->orderBy('id','DESC')->get();
        return view('UAEAdmin.employerRequest.new', compact('users'));
    }

    public function approved(){
        $users = User::where('user_type','employer-company')->where('active_status', 'Approved')->orderBy('id','DESC')->get();
        return view('UAEAdmin.employerRequest.approved', compact('users'));
    }

    public function rejected(){
        $users = User::where('user_type','employer-company')->where('active_status', 'Rejected')->orderBy('id','DESC')->get();
        return view('UAEAdmin.employerRequest.rejected', compact('users'));
    }

    public function edit($id){
        $user = User::findOrFail($id);
        return view('UAEAdmin.employerRequest.edit', compact('user'));
    }

    public function update(Request $request , $id){
        $user = User::find($id);

        $user->company_name    =   $request->companyName;
        $user->active_status    =  $request->activeStatus;
        $user->company_register_number    =   $request->companyRegisterNumber;
        $user->domain       =   $request->domain;
        $user->phone        =   $request->phoneNumber;
        $user->address1    =   $request->address1;
        $user->address2    =   $request->address2;
        $user->quata    =   $request->quata;


        try {
            $user->save();
            return back()->withToastSuccess('Successfully saved.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }
}
