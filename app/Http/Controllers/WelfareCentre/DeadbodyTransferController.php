<?php

namespace App\Http\Controllers\WelfareCentre;

use App\DeadbodyTransfer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeadbodyTransferController extends Controller
{
    public function request()
    {
        $deadbodyTransfers =  DeadbodyTransfer::where('wsc_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('WelfareCentre.WSC_Registered.deadbodyTransfer.request', compact('deadbodyTransfers'));
    }

    public function deadbodyTransferStatus($id)
    {
        $deadbodyTransfer = DeadbodyTransfer::findOrFail($id);
        return view('WelfareCentre.WSC_Registered.deadbodyTransfer.status', compact('deadbodyTransfer'));
    }

    public function deadbodyTransferStatusUpdete(Request $request, $id)
    {
        $request->validate([
            'serviceStatus' => 'required'
        ]);

        $deadbodyTransfer = DeadbodyTransfer::findOrFail($id);
        $deadbodyTransfer->active_status = $request->serviceStatus;
        try {
            $deadbodyTransfer->save();
            return back()->withToastSuccess('Successfully Updated.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }
}
