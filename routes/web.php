<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
/*Route::get('/', 'HomeController@index')->name('admin.login');*/

include('child_oss_route.php');
include('one_stop_service_route.php');
include('welfare_service_centre_route.php');
include('medical_agency_route.php');
include('training_agency_route.php');
include('uae_embassy_route.php');
include('uae_admin_route.php');
include('candidate_route.php');
include('travel_agency_route.php');
include('biometric_agencies_route.php');
include('bangladesh_embassy_route.php');
include('employer_company_route.php');
include('recruiting_agency_route.php');
include('bangladesh_admin_route.php');
include('super_admin_route.php');

Auth::routes([
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

/*Route::get('/home', 'HomeController@index')->name('home');*/
