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
