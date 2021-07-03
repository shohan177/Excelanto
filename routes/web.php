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


Route::group(['namespace'=>'BangladeshAdmin'], function (){
   Route::get('/','BangladeshAdminDashboardController@dashboard')->name('bangladeshAdmin.dashboard');
   Route::get('company_request','RecruitingAgencieController@company_request')->name('company_request');
});
