<?php

use Illuminate\Support\Facades\Route;

  // UaeEmbassy
Route::group(['prefix' => 'uae-embassy/', 'namespace' => 'UaeEmbassy', 'as' => 'UaeEmbassy.', 'middleware' => ['auth', 'uae-embassy']], function () {
    Route::get('/dashboard', 'UaeEmbassyDashboardController@dashboard')->name('dashboard');
    Route::get('/company-profile-view', 'UaeEmbassyDashboardController@companyPrfileView')->name('companyPrfileView');
    Route::post('/company-profile-submit', 'UaeEmbassyDashboardController@companyPrfileSubmit')->name('companyPrfileSubmit');

    //visa Process
    Route::get('/stamping_requested', 'VisaProcessController@stamping_requested')->name('stamping_requested');
    Route::get('/requested-candidate-profile/{offered_candidate_id}', 'VisaProcessController@requestedCandidateProfile')->name('visaProcess.requestedCandidateProfile');
    Route::get('/stamping_approved','VisaProcessController@stamping_approved')->name('stamping_approved');
    Route::get('/stamping_rejected','VisaProcessController@stamping_rejected')->name('stamping_rejected');
});
