<?php

use Illuminate\Support\Facades\Route;

// Super Admin route
Route::group(['prefix' => 'super-admin/', 'namespace' => 'SuperAdmin', 'as' => 'SuperAdmin.', 'middleware' => ['auth', 'super-admin']], function () {
    Route::get('/dashboard', 'SuperAdminDashboardController@dashboard')->name('dashboard');
    Route::resource('role', 'RoleController');
    Route::resource('country', 'CountryController');
});
