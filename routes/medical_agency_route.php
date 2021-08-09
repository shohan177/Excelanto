<?php

use Illuminate\Support\Facades\Route;

// Medical Agency
Route::group(['prefix' => 'medical-agency/', 'namespace' => 'MedicalAgency', 'as' => 'MedicalAgency.', 'middleware' => ['auth', 'medical-agency']], function () {
    Route::get('/dashboard', 'MedicalAgencyDashboardController@dashboard')->name('dashboard');
    Route::get('/company-profile-view', 'MedicalAgencyDashboardController@companyPrfileView')->name('companyPrfileView');
    Route::post('/company-profile-submit', 'MedicalAgencyDashboardController@companyPrfileSubmit')->name('companyPrfileSubmit');

    //Candidate
    Route::get('new-candidate', 'CandidateController@new')->name('candidate.new');
    Route::get('show-candidate/{id}', 'CandidateController@show')->name('candidate.show');
    Route::get('post_medical_report/{id}', 'CandidateController@post_medical_report')->name('candidate.post_medical_report');
    Route::post('add_medical_report/{id}', 'CandidateController@add_medical_report')->name('candidate.add_medical_report');

    Route::get('reported-candidate', 'CandidateController@reported')->name('candidate.reported');
});
