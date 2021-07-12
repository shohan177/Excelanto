<?php

namespace App\Http\Controllers\BangladeshAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class RecruitingAgencieController extends Controller
{
    public function company_request(){
        $users = User::where('active_status', 'Pending')->get();
        return view('BangladeshAdmin.recruiting_agencies.company_request', compact('users'));
    }

    public function company_approved_request(){
        $users = User::where('active_status', 'Approved')->get();
        return view('BangladeshAdmin.recruiting_agencies.company_approved_request', compact('users'));
    }

    public function company_rejected_request(){
        $users = User::where('active_status', 'Rejected')->get();
        return view('BangladeshAdmin.recruiting_agencies.company_rejected_request', compact('users'));
    }

    public function approveNow($id){
        $user = User::findOrFail($id);
        $user->active_status = "Approved";
        try {
            $user->save();
            return response()->json([
                'type' => 'success',
                'message' => 'Successfully Stored'
            ]);
        }catch (\Exception $exception){
            return response()->json([
                'type' => 'error',
                'message' => $exception->getMessage()
            ]);
        }
    }
    public function rejectNow($id){
        $user = User::findOrFail($id);
        $user->active_status = "Rejected";
        try {
            $user->save();
            return response()->json([
                'type' => 'success',
                'message' => 'Successfully Updated'
            ]);
        }catch (\Exception $exception){
            return response()->json([
                'type' => 'error',
                'message' => $exception->getMessage()
            ]);
        }
    }
}
