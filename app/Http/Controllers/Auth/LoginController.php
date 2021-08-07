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

            return 'super-admin/dashboard';
        }elseif(Auth::user()->user_type == 'employer-company')
        {
            return 'employer-company/dashboard';
        }elseif(Auth::user()->user_type == 'welfare-service-center-company')
        {
            return 'welfare-centre/dashboard';

        }elseif(Auth::user()->user_type == 'bangladeshi-embassy')
        {
            return 'bangladesh-embassy/dashboard';

        }elseif(Auth::user()->user_type == 'uae-admin')
        {
            return 'uae-admin/dashboard';

        }elseif(Auth::user()->user_type == 'master-one-stop-service')
        {
            return 'one-stop-service/dashboard';

        }elseif(Auth::user()->user_type == 'child-one-stop-service')
        {
            return 'child-one-stop-service/dashboard';

        }elseif(Auth::user()->user_type == 'medical-company')
        {
            return 'medical-agency/dashboard';

        }elseif(Auth::user()->user_type == 'training-company')
        {
            return 'training-agency/dashboard';

        }elseif(Auth::user()->user_type == 'travel-company')
        {
            return '/dashboard';

        }elseif(Auth::user()->user_type == 'biometric-company')
        {
            return '/dashboard';

        }elseif(Auth::user()->user_type == 'recruiting-agency')
        {
            return 'recruiting-agency/dashboard';

        }elseif(Auth::user()->user_type == 'bangladeshi-admin')
        {
            return 'bangladesh-admin/dashboard';

        }elseif(Auth::user()->user_type == 'employer')
        {
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
