<?php

use Illuminate\Support\Facades\Route;

// recruiting agency route
Route::group(['prefix' => 'recruiting-agency/', 'namespace' => 'RecruitingAgency', 'as' => 'RecruitingAgency.', 'middleware' => ['auth', 'recruiting-agency']], function () {
    Route::get('/dashboard', 'RecruitingAgencyDashboardController@dashboard')->name('dashboard');
    Route::post('/company-prfile-submit', 'RecruitingAgencyDashboardController@companyPrfileSubmit')->name('companyPrfileSubmit');
    Route::get('/company-profile-view', 'RecruitingAgencyDashboardController@companyPrfileView')->name('companyPrfileView');


    //Job Posts
    Route::get('all-job-post', 'JobPostController@all')->name('jobPost.all');
    Route::get('show-job-post/{id}', 'JobPostController@show')->name('jobPost.show');
    Route::get('select-candidates/{applied_job_id}', 'JobPostController@selectCandidates')->name('jobPost.selectCandidates');
    Route::get('edit-job-post/{id}', 'JobPostController@edit')->name('jobPost.edit');
    Route::post('update-job-post/{id}', 'JobPostController@update')->name('jobPost.update');

    Route::get('applied-job', 'AppliedJobController@applied')->name('appliedJob.applied');
    Route::get('show-applied-job/{id}', 'AppliedJobController@show')->name('appliedJob.show');

    //Candidates
    Route::group(['prefix' => 'candidate/', 'as' => 'candidate.'], function () {
        Route::get('new', 'CandidateController@new')->name('new');
        Route::post('approve/{candidate_id}/{applied_job_id}', 'CandidateController@approveNow')->name('approveNow');
        Route::post('reject/{id}', 'CandidateController@rejectNow')->name('rejectNow');
        Route::post('store', 'CandidateController@store')->name('store');
        Route::get('all', 'CandidateController@all')->name('all');
        Route::get('show/{id}', 'CandidateController@show')->name('show');
        Route::get('selected', 'CandidateController@selected')->name('selected');
        Route::get('view-selected', 'CandidateController@viewSelected')->name('viewSelected');
        Route::get('view-selected/{id}', 'CandidateController@viewSelected')->name('viewSelected');
    });
});
