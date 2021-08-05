<?php

use Illuminate\Support\Facades\Route;

 // Candidate
 Route::group(['prefix' => 'candidate/', 'namespace' => 'Candidate', 'as' => 'Candidate.', 'middleware' => ['auth', 'candidate']], function () {
    Route::get('/dashboard', 'CandidateDashboardController@dashboard')->name('dashboard');
    Route::get('/company-profile-view', 'CandidateDashboardController@companyPrfileView')->name('companyPrfileView');
    Route::post('/company-profile-submit', 'CandidateDashboardController@companyPrfileSubmit')->name('companyPrfileSubmit');
});
