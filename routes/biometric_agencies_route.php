<?php

use Illuminate\Support\Facades\Route;

// BiometricAgencies
Route::group(['prefix' => 'biometric-agencies/', 'namespace' => 'BiometricAgencies', 'as' => 'BiometricAgencies.', 'middleware' => ['auth', 'biometric-agencies']], function () {
    Route::get('/dashboard', 'BiometricAgenciesDashboardController@dashboard')->name('dashboard');
    Route::get('/company-profile-view', 'BiometricAgenciesDashboardController@companyPrfileView')->name('companyPrfileView');
    Route::post('/company-profile-submit', 'BiometricAgenciesDashboardController@companyPrfileSubmit')->name('companyPrfileSubmit');

    //Candidate
    Route::get('new-candidate', 'CandidateController@new')->name('candidate.new');
    Route::get('reported-candidate', 'CandidateController@reported')->name('candidate.reported');
});
