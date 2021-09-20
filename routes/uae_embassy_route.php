<?php

use Illuminate\Support\Facades\Route;

  // UaeEmbassy
Route::group(['prefix' => 'uae-embassy/', 'namespace' => 'UaeEmbassy', 'as' => 'UaeEmbassy.', 'middleware' => ['auth', 'uae-embassy']], function () {
    Route::get('/dashboard', 'UaeEmbassyDashboardController@dashboard')->name('dashboard');
    Route::get('/company-profile-view', 'UaeEmbassyDashboardController@companyPrfileView')->name('companyPrfileView');
    Route::post('/company-profile-submit', 'UaeEmbassyDashboardController@companyPrfileSubmit')->name('companyPrfileSubmit');

    //visa Process
    Route::get('/stamping-requested', 'VisaProcessController@stampingRequested')->name('stampingRequested');
    Route::get('/stamping-approved','VisaProcessController@stampingApproved')->name('stampingApproved');
    Route::get('/stamping-rejected','VisaProcessController@stampingRejected')->name('stampingRejected');
    // candidates profile routes
    Route::get('/requested-candidate-profile/{offered_candidate_id}', 'VisaProcessController@requestedCandidateProfile')->name('visaProcess.requestedCandidateProfile');
    Route::get('/approved-candidate-profile/{offered_candidate_id}', 'VisaProcessController@approvedCandidateProfile')->name('visaProcess.approvedCandidateProfile');
    Route::get('/rejected-candidate-profile/{offered_candidate_id}', 'VisaProcessController@rejectedCandidateProfile')->name('visaProcess.rejectedCandidateProfile');
});
