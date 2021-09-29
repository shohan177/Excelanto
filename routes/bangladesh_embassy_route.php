<?php

use Illuminate\Support\Facades\Route;

// Bangladesh Embassy route
Route::group(['prefix' => 'bangladesh-embassy/', 'namespace' => 'BangladeshEmbassy', 'as' => 'BangladeshEmbassy.', 'middleware' => ['auth', 'bangladesh-embassy']], function () {
    Route::get('/dashboard', 'BangladeshEmbassyDashboardController@dashboard')->name('dashboard');
    Route::get('/company-profile-view', 'BangladeshEmbassyDashboardController@companyPrfileView')->name('companyPrfileView');

    Route::post('/company-prfile-submit', 'BangladeshEmbassyDashboardController@companyPrfileSubmit')->name('companyPrfileSubmit');

    // candidate profile show
    Route::get('show-candidate-profile/{candidate_id}', 'CandidateController@showCandidateProfile')->name('candidate.showCandidateProfile');

    // Employer demand
    Route::group(['prefix' => 'employer-demand/', 'as' => 'employerDemand.'], function () {
        Route::get('received', 'EmployerDemandController@received')->name('received');
        Route::get('edit/{id}', 'EmployerDemandController@edit')->name('edit');
        Route::post('update/{id}', 'EmployerDemandController@update')->name('update');
        Route::get('approved', 'EmployerDemandController@approved')->name('approved');
        Route::get('rejected', 'EmployerDemandController@rejected')->name('rejected');
        Route::get('show/{id}', 'EmployerDemandController@show')->name('show');
    });

    // New Passport Service
    Route::group(['prefix' => 'new-passport/', 'as' => 'newPassport.'], function () {
        Route::get('requested', 'NewPassportController@request')->name('request');
        Route::get('approved', 'NewPassportController@approved')->name('approved');
        Route::get('rejected', 'NewPassportController@rejected')->name('rejected');
        Route::get('status/{new_passport_service_id}', 'NewPassportController@status')->name('status');
        Route::post('status-update/{new_passport_service_id}', 'NewPassportController@statusUpdate')->name('statusUpdate');
    });

    // Lost Passport Service
    Route::group(['prefix' => 'lost-passport/', 'as' => 'lostPassport.'], function () {
        Route::get('requested', 'LostPassportController@request')->name('request');
        Route::get('approved', 'LostPassportController@approved')->name('approved');
        Route::get('rejected', 'LostPassportController@rejected')->name('rejected');
        Route::get('status/{lost_passport_service_id}', 'LostPassportController@status')->name('status');
        Route::post('status-update/{lost_passport_service_id}', 'LostPassportController@statusUpdate')->name('statusUpdate');
    });

    // Extension Passport Service
    Route::group(['prefix' => 'extension-passport/', 'as' => 'extensionPassport.'], function () {
        Route::get('requested', 'ExtensionPassportController@request')->name('request');
        Route::get('approved', 'ExtensionPassportController@approved')->name('approved');
        Route::get('rejected', 'ExtensionPassportController@rejected')->name('rejected');
        Route::get('status/{extension_passport_service_id}', 'ExtensionPassportController@status')->name('status');
        Route::post('status-update/{extension_passport_service_id}', 'ExtensionPassportController@statusUpdate')->name('statusUpdate');
    });
});
