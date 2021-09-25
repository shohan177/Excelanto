<?php

use Illuminate\Support\Facades\Route;

// BiometricAgencies
Route::group(['prefix' => 'biometric-agency/', 'namespace' => 'BiometricAgencies', 'as' => 'BiometricAgencies.', 'middleware' => ['auth', 'biometric-agency']], function () {
    Route::get('/dashboard', 'BiometricAgenciesDashboardController@dashboard')->name('dashboard');
    Route::get('/company-profile-view', 'BiometricAgenciesDashboardController@companyPrfileView')->name('companyPrfileView');
    Route::post('/company-profile-submit', 'BiometricAgenciesDashboardController@companyPrfileSubmit')->name('companyPrfileSubmit');

    //Candidate
    Route::group(['prefix' => 'candidate/', 'as' => 'candidate.'], function () {
        Route::get('show-profile/{offered_candidate_id}', 'CandidateController@showCandidateProfile')->name('showCandidateProfile');
        Route::get('new', 'CandidateController@new')->name('new');
        Route::get('reported', 'CandidateController@reported')->name('reported');
        Route::get('upload-biometric/{offered_candidate_id}', 'CandidateController@uploadBiometric')->name('uploadBiometric');
        Route::post('upload-biometric-store/{offered_candidate_id}', 'CandidateController@uploadBiometricStore')->name('uploadBiometricStore');
    });
});
