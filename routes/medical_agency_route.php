<?php

use Illuminate\Support\Facades\Route;

// Medical Agency middleware route
Route::group(['prefix' => 'medical-agency/', 'namespace' => 'MedicalAgency', 'as' => 'MedicalAgency.', 'middleware' => ['auth', 'medical-agency']], function () {
    Route::get('/dashboard', 'MedicalAgencyDashboardController@dashboard')->name('dashboard');
    Route::get('/company-profile-view', 'MedicalAgencyDashboardController@companyPrfileView')->name('companyPrfileView');
    Route::post('/company-profile-submit', 'MedicalAgencyDashboardController@companyPrfileSubmit')->name('companyPrfileSubmit');

    //Candidate
    Route::group(['prefix' => 'candidate/', 'as' => 'candidate.'], function () {
        Route::get('new', 'CandidateController@new')->name('new');
        Route::get('show/{id}', 'CandidateController@show')->name('show');
        Route::get('post-medical-report/{id}', 'CandidateController@post_medical_report')->name('post_medical_report');
        Route::post('add-medical-report/{id}', 'CandidateController@add_medical_report')->name('add_medical_report');
        Route::get('reported', 'CandidateController@reported')->name('reported');
    });
});
