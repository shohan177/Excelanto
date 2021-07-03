<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('BangladeshAdmin.welcome');
});*/


Route::group(['namespace' => 'BangladeshAdmin'], function () {
    Route::get('/', 'BangladeshAdminDashboardController@dashboard')->name('bangladeshAdmin.dashboard');
    Route::get('company_request', 'RecruitingAgencieController@company_request')->name('company_request');

    //    one stop services
    Route::get('oss_company_request', 'OneStopServiceController@oss_company_request')->name('oss_company_request');
    Route::get('oss_approved_request', 'OneStopServiceController@oss_approved_request')->name('oss_approved_request');
    Route::get('oss_rejected_request', 'OneStopServiceController@oss_rejected_request')->name('oss_rejected_request');

    //    Welfare service centers
    Route::get('welfare_company_request', 'WelfareServiceCenterController@welfare_company_request')->name('welfare_company_request');
    Route::get('welfare_approved_request', 'WelfareServiceCenterController@welfare_approved_request')->name('welfare_approved_request');
    Route::get('welfare_rejected_request', 'WelfareServiceCenterController@welfare_rejected_request')->name('welfare_rejected_request');
});
