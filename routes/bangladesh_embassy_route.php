<?php

use Illuminate\Support\Facades\Route;

// Bangladesh Embassy route
Route::group(['prefix' => 'bangladesh-embassy/', 'namespace' => 'BangladeshEmbassy', 'as' => 'BangladeshEmbassy.', 'middleware' => ['auth', 'bangladesh-embassy']], function () {
    Route::get('/dashboard', 'BangladeshEmbassyDashboardController@dashboard')->name('dashboard');
    Route::get('/company-profile-view', 'BangladeshEmbassyDashboardController@companyPrfileView')->name('companyPrfileView');

    Route::post('/company-prfile-submit', 'BangladeshEmbassyDashboardController@companyPrfileSubmit')->name('companyPrfileSubmit');

    // candidate profile show
    Route::get('show-candidate-profile/{candidate_id}', 'CandidateController@showCandidateProfile')->name('candidate.showCandidateProfile');

    // Visa Process
    Route::get('received-employer-demand', 'EmployerDemandController@received')->name('employerDemand.received');
    Route::get('edit-employer-demand/{id}', 'EmployerDemandController@edit')->name('employerDemand.edit');
    Route::post('update-employer-demand/{id}', 'EmployerDemandController@update')->name('employerDemand.update');
    Route::get('approved-employer-demand', 'EmployerDemandController@approved')->name('employerDemand.approved');
    Route::get('rejected-employer-demand', 'EmployerDemandController@rejected')->name('employerDemand.rejected');
    Route::get('show-employer-demand/{id}', 'EmployerDemandController@show')->name('employerDemand.show');

    // New Passport Service
    Route::get('requested-new-passport', 'NewPassportController@request')->name('newPassport.request');
    Route::get('approved-new-passport', 'NewPassportController@approved')->name('newPassport.approved');
    Route::get('rejected-new-passport', 'NewPassportController@rejected')->name('newPassport.rejected');
    Route::get('new-passport-status/{new_passport_service_id}', 'NewPassportController@status')->name('newPassport.status');
    Route::post('new-passport-status-update/{new_passport_service_id}', 'NewPassportController@statusUpdate')->name('newPassport.statusUpdate');

    // Lost Passport Service
    Route::get('requested-lost-passport', 'LostPassportController@request')->name('lostPassport.request');
    Route::get('approved-lost-passport', 'LostPassportController@approved')->name('lostPassport.approved');
    Route::get('rejected-lost-passport', 'LostPassportController@rejected')->name('lostPassport.rejected');
    Route::get('lost-passport-status/{lost_passport_service_id}', 'LostPassportController@status')->name('lostPassport.status');
    Route::post('lost-passport-status-update/{lost_passport_service_id}', 'LostPassportController@statusUpdate')->name('lostPassport.statusUpdate');

    // Extension Passport Service
    Route::get('requested-extension-passport', 'ExtensionPassportController@request')->name('extensionPassport.request');
    Route::get('approved-extension-passport', 'ExtensionPassportController@approved')->name('extensionPassport.approved');
    Route::get('rejected-extension-passport', 'ExtensionPassportController@rejected')->name('extensionPassport.rejected');
    Route::get('extension-passport-status/{extension_passport_service_id}', 'ExtensionPassportController@status')->name('extensionPassport.status');
    Route::post('extension-passport-status-update/{extension_passport_service_id}', 'ExtensionPassportController@statusUpdate')->name('extensionPassport.statusUpdate');
});
