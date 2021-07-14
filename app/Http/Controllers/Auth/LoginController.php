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
            return route('SuperAdmin.dashboard');
        }elseif(Auth::user()->user_type == 'employer-company')
        {
            return route('EmployerCompany.dashboard');
        }elseif(Auth::user()->user_type == 'welfare-service-center-company')
        {
            return route('WelfareCentre.dashboard');
        }elseif(Auth::user()->user_type == 'bangladeshi-embassy')
        {
            return route('BangladeshEmbassy.dashboard');
        }elseif(Auth::user()->user_type == 'uae-admin')
        {
            return route('UAEAdmin.dashboard');
        }elseif(Auth::user()->user_type == 'master-one-stop-service')
        {
            return route('OneStopService.dashboard');
        }elseif(Auth::user()->user_type == 'one-stop-service-agency')
        {
            //return route('.dashboard');
        }elseif(Auth::user()->user_type == 'medical-company')
        {
            //return route('.dashboard');
        }elseif(Auth::user()->user_type == 'training-company')
        {
            //return route('.dashboard');
        }elseif(Auth::user()->user_type == 'travel-company')
        {
            //return route('.dashboard');
        }elseif(Auth::user()->user_type == 'biometric-company')
        {
            //return route('.dashboard');
        }elseif(Auth::user()->user_type == 'recruiting-agency')
        {
            return route('RecruitingAgency.dashboard');
        }elseif(Auth::user()->user_type == 'bangladeshi-admin')
        {
            return route('BangladeshAdmin.dashboard');
        }elseif(Auth::user()->user_type == 'employer')
        {
            //return route('.dashboard');
        }else
        {
            return route('login');
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
