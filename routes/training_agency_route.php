<?php

use Illuminate\Support\Facades\Route;

 // Training Agency
 Route::group(['prefix' => 'training-agency/', 'namespace' => 'TrainingAgency', 'as' => 'TrainingAgency.', 'middleware' => ['auth', 'training-agency']], function () {
    Route::get('/dashboard', 'TrainingAgencyDashboardController@dashboard')->name('dashboard');
    Route::get('/company-profile-view', 'TrainingAgencyDashboardController@companyPrfileView')->name('companyPrfileView');
    Route::post('/company-profile-submit', 'TrainingAgencyDashboardController@companyPrfileSubmit')->name('companyPrfileSubmit');

    //Candidate
    Route::get('new-candidate', 'CandidateController@new')->name('candidate.new');
    Route::get('reported-candidate', 'CandidateController@reported')->name('candidate.reported');
});
