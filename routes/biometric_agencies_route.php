<?php

use Illuminate\Support\Facades\Route;

// BiometricAgencies
Route::group(['prefix' => 'biometric-agency/', 'namespace' => 'BiometricAgencies', 'as' => 'BiometricAgencies.', 'middleware' => ['auth', 'biometric-agency']], function () {
    Route::get('/dashboard', 'BiometricAgenciesDashboardController@dashboard')->name('dashboard');
    Route::get('/company-profile-view', 'BiometricAgenciesDashboardController@companyPrfileView')->name('companyPrfileView');
    Route::post('/company-profile-submit', 'BiometricAgenciesDashboardController@companyPrfileSubmit')->name('companyPrfileSubmit');

    //Candidate
    Route::get('show-candidate-profile/{offered_candidate_id}', 'CandidateController@showCandidateProfile')->name('candidate.showCandidateProfile');
    Route::get('new-candidate', 'CandidateController@new')->name('candidate.new');
    Route::get('reported-candidate', 'CandidateController@reported')->name('candidate.reported');
    Route::get('upload-biometric/{offered_candidate_id}', 'CandidateController@uploadBiometric')->name('candidate.uploadBiometric');
    Route::post('upload-biometric-store/{offered_candidate_id}', 'CandidateController@uploadBiometricStore')->name('candidate.uploadBiometricStore');
});
