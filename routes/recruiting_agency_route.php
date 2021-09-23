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
    Route::get('new-candidates', 'CandidateController@new')->name('candidate.new');
    Route::post('approve-candidate/{candidate_id}/{applied_job_id}', 'CandidateController@approveNow')->name('candidate.approveNow');
    Route::post('reject-candidate/{id}', 'CandidateController@rejectNow')->name('candidate.rejectNow');
    Route::post('store-candidates', 'CandidateController@store')->name('candidate.store');
    Route::get('all-candidates', 'CandidateController@all')->name('candidate.all');
    Route::get('show-candidate/{id}', 'CandidateController@show')->name('candidate.show');
    Route::get('selected-candidates', 'CandidateController@selected')->name('candidate.selected');
    Route::get('view-selected-candidates', 'CandidateController@viewSelected')->name('candidate.viewSelected');
    Route::get('view-selected-candidates/{id}', 'CandidateController@viewSelected')->name('candidate.viewSelected');
});
