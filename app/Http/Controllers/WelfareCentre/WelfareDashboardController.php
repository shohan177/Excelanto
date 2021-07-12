<?php

namespace App\Http\Controllers\WelfareCentre;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

class WelfareDashboardController extends Controller
{
    public function dashboard(){
        $user = User::find(3);
        if ($user->active_status == "New" || $user->active_status == 'Pending' || $user->active_status == 'Rejected') {
            return view('WelfareCentre.pending-profile', compact('user'));
        }
        return view('WelfareCentre.dashboard');
    }

    public function companyPrfileSubmit(Request $request)
    {

        $user = User::find(3);
        // dd($user->active_status);

        $user->company_name    =   $request->companyName;
        $user->active_status    ="Pending";
        $user->abbr            =   $request->abbreviation;
        $user->company_register_number    =   $request->companyRegisterNumber;
        $user->domain       =   $request->domain;
        $user->phone        =   $request->phoneNumber;
        $user->city    =   $request->city;
        $user->state    =   $request->state;
        $user->address1    =   $request->address1;
        $user->address2    =   $request->address2;

        if ($request->hasFile('logo')) {
            $image             = $request->file('logo');
            $folder_path       = 'uploads/profile/';
            $image_new_name    = Str::random(20) . '-' . now()->timestamp . '.' . $image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path . $image_new_name);
            $user->logo   = $folder_path . $image_new_name;
        }
        if ($request->hasFile('document1')) {
            $image             = $request->file('document1');
            $folder_path       = 'uploads/profile/';
            $image_new_name    = Str::random(20) . '-' . now()->timestamp . '.' . $image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path . $image_new_name);
            $user->document1   = $folder_path . $image_new_name;
        }
        if ($request->hasFile('document2')) {
            $image             = $request->file('document2');
            $folder_path       = 'uploads/profile/';
            $image_new_name    = Str::random(20) . '-' . now()->timestamp . '.' . $image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path . $image_new_name);
            $user->document2   = $folder_path . $image_new_name;
        }

        try {
            $user->save();
            return back()->withToastSuccess('Successfully saved.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }
}
