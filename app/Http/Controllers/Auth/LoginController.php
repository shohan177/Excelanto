<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo;

    public function redirectTo()
    {
        if (Auth::user()->user_type == 'super-admin'){
            return redirect()->route('SuperAdmin.dashboard');
        }elseif(Auth::user()->user_type == 'employer-company')
        {
            return redirect()->route('EmployerCompany.dashboard');
        }elseif(Auth::user()->user_type == 'welfare-service-center-company')
        {
            return redirect()->route('WelfareCentre.dashboard');
        }elseif(Auth::user()->user_type == 'bangladeshi-embassy')
        {
            return redirect()->route('BangladeshEmbassy.dashboard');
        }elseif(Auth::user()->user_type == 'uae-admin')
        {
            return redirect()->route('UAEAdmin.dashboard');
        }elseif(Auth::user()->user_type == 'master-one-stop-service')
        {
            return redirect()->route('OneStopService.dashboard');
        }elseif(Auth::user()->user_type == 'one-stop-service-agency')
        {
            //return redirect()->route('.dashboard');
        }elseif(Auth::user()->user_type == 'medical-company')
        {
            //return redirect()->route('.dashboard');
        }elseif(Auth::user()->user_type == 'training-company')
        {
            //return redirect()->route('.dashboard');
        }elseif(Auth::user()->user_type == 'travel-company')
        {
            //return redirect()->route('.dashboard');
        }elseif(Auth::user()->user_type == 'biometric-company')
        {
            //return redirect()->route('.dashboard');
        }elseif(Auth::user()->user_type == 'recruiting-agency')
        {
            return redirect()->route('RecruitingAgency.dashboard');
        }elseif(Auth::user()->user_type == 'bangladeshi-admin')
        {
            //return redirect()->route('BangladeshAdmin.dashboard');
        }elseif(Auth::user()->user_type == 'employer')
        {
            //return redirect()->route('.dashboard');
        }else
        {
            return redirect()->route('login');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


}
