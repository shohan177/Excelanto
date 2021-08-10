<?php

namespace App\Http;

use App\Http\Middleware\BangladeshAdmin;
use App\Http\Middleware\BangladeshEmbassy;
use App\Http\Middleware\EmployerCompany;
use App\Http\Middleware\OneStopService;
use App\Http\Middleware\OneStopService_Child;
use App\Http\Middleware\TravelAgency;
use App\Http\Middleware\BiometricAgencies;
use App\Http\Middleware\Candidate;
use App\Http\Middleware\UaeEmbassy;
use App\Http\Middleware\TrainingAgency;
use App\Http\Middleware\MedicalAgency;
use App\Http\Middleware\RecruitingAgency;
use App\Http\Middleware\SuperAdmin;
use App\Http\Middleware\UaeAdmin;
use App\Http\Middleware\WelfareCentre;
use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        // \App\Http\Middleware\TrustHosts::class,
        \App\Http\Middleware\TrustProxies::class,
        \Fruitcake\Cors\HandleCors::class,
        \App\Http\Middleware\CheckForMaintenanceMode::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,

            \RealRashid\SweetAlert\ToSweetAlert::class,
        ],

        'api' => [
            'throttle:60,1',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'super-admin'=>SuperAdmin::class,
        'bangladesh-admin'=>BangladeshAdmin::class,
        'recruiting-agency'=>RecruitingAgency::class,
        'welfare-centre'=>WelfareCentre::class,
        'uae-admin'=>UaeAdmin::class,
        'one-stop-service'=>OneStopService::class,
        'child-one-stop-service'=>OneStopService_Child::class,
        'travel-agency'=>TravelAgency::class,
        'biometric-agency'=>BiometricAgencies::class,
        'candidate'=>Candidate::class,
        'uae-embassy'=>UaeEmbassy::class,
        'training-agency'=>TrainingAgency::class,
        'medical-agency'=>MedicalAgency::class,
        'employer-company'=>EmployerCompany::class,
        'bangladesh-embassy'=>BangladeshEmbassy::class,
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
        'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
    ];
}
