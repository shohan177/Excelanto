<?php

use Illuminate\Support\Facades\Route;

 // Training Agency
 Route::group(['prefix' => 'training-agency/', 'namespace' => 'TrainingAgency', 'as' => 'TrainingAgency.', 'middleware' => ['auth', 'training-agency']], function () {
    Route::get('/dashboard', 'TrainingAgencyDashboardController@dashboard')->name('dashboard');
    Route::get('/company-profile-view', 'TrainingAgencyDashboardController@companyPrfileView')->name('companyPrfileView');
    Route::post('/company-profile-submit', 'TrainingAgencyDashboardController@companyPrfileSubmit')->name('companyPrfileSubmit');

    //Candidate
    Route::get('new-candidate', 'CandidateController@new')->name('candidate.new');
    Route::get('show-candidate/{id}', 'CandidateController@show')->name('candidate.show');
    Route::get('post_training_report/{id}', 'CandidateController@post_training_report')->name('candidate.post_training_report');
    Route::post('add_training_report/{id}', 'CandidateController@add_training_report')->name('candidate.add_training_report');



    Route::get('reported-candidate', 'CandidateController@reported')->name('candidate.reported');
});
