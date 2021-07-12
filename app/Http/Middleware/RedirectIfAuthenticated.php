<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {

        if (Auth::guard($guard)->check() && Auth::user()->user_type == 'super-admin'){
            return redirect()->route('SuperAdmin.dashboard');
        }elseif(Auth::guard($guard)->check() && Auth::user()->user_type == 'employer-company')
        {
            return redirect()->route('EmployerCompany.dashboard');
        }elseif(Auth::guard($guard)->check() && Auth::user()->user_type == 'welfare-service-center-company')
        {
            return redirect()->route('WelfareCentre.dashboard');
        }elseif(Auth::guard($guard)->check() && Auth::user()->user_type == 'bangladeshi-embassy')
        {
            //return redirect()->route('OneStopService.dashboard');
        }elseif(Auth::guard($guard)->check() && Auth::user()->user_type == 'uae-admin')
        {
            return redirect()->route('UAEAdmin.dashboard');
        }elseif(Auth::guard($guard)->check() && Auth::user()->user_type == 'master-one-stop-service')
        {
            return redirect()->route('OneStopService.dashboard');
        }elseif(Auth::guard($guard)->check() && Auth::user()->user_type == 'one-stop-service-agency')
        {
            //return redirect()->route('.dashboard');
        }elseif(Auth::guard($guard)->check() && Auth::user()->user_type == 'medical-company')
        {
            //return redirect()->route('.dashboard');
        }elseif(Auth::guard($guard)->check() && Auth::user()->user_type == 'training-company')
        {
            //return redirect()->route('.dashboard');
        }elseif(Auth::guard($guard)->check() && Auth::user()->user_type == 'travel-company')
        {
            //return redirect()->route('.dashboard');
        }elseif(Auth::guard($guard)->check() && Auth::user()->user_type == 'biometric-company')
        {
            //return redirect()->route('.dashboard');
        }elseif(Auth::guard($guard)->check() && Auth::user()->user_type == 'recruiting-agency')
        {
            return redirect()->route('RecruitingAgency.dashboard');
        }elseif(Auth::guard($guard)->check() && Auth::user()->user_type == 'bangladeshi-admin')
        {
            //return redirect()->route('BangladeshAdmin.dashboard');
        }elseif(Auth::guard($guard)->check() && Auth::user()->user_type == 'employer')
        {
            //return redirect()->route('.dashboard');
        }else
        {
            return $next($request);
        }
    }
}
