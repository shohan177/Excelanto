<?php

use Illuminate\Support\Facades\Route;

// employer_company Route
Route::group(['prefix' => 'employer-company/', 'namespace' => 'EmployerCompany', 'as' => 'EmployerCompany.', 'middleware' => ['auth', 'employer-company']], function () {
    Route::get('/dashboard', 'EmployerCompanyDashboardController@dashboard')->name('dashboard');
    Route::post('/company-prfile-submit', 'EmployerCompanyDashboardController@companyPrfileSubmit')->name('companyPrfileSubmit');

    // job post
    Route::resource('job_post', 'PostJobController', [
        'names' => [
            'index' => 'postJob.index',
            'create' => 'postJob.create',
            'store' => 'postJob.store',
            'show' => 'postJob.show',
        ]
    ]);

    // candidates
    Route::group(['prefix' => 'candidates/', 'as' => 'candidates.'], function () {
        Route::get('new', 'CandidateController@new_candidates')->name('new');
        Route::get('new-list/{applied_job_id}', 'CandidateController@newCandidateList')->name('newCandidateList');
        Route::get('show/{id}', 'CandidateController@show')->name('show');
        Route::get('show-offered/{offered_candidate_id}', 'CandidateController@showOfferedCandidate')->name('showOfferedCandidate');
        Route::get('show-booked/{offered_candidate_id}', 'CandidateController@showBookedCandidate')->name('showBookedCandidate');
        Route::get('edit-result/{id}', 'CandidateController@editCandidateResult')->name('editCandidateResult');
        Route::post('update-result/{id}', 'CandidateController@updateCandidateResult')->name('updateCandidateResult');
        Route::get('edit-interview/{offered_candidate_id}', 'CandidateController@editInterview')->name('editInterview');
        Route::post('update-interview/{offered_candidate_id}', 'CandidateController@updateInterview')->name('updateInterview');
        Route::get('result', 'CandidateController@candidates_result')->name('result');
        Route::get('finalized', 'CandidateController@finalized_candidates')->name('finalized');
        Route::get('tickets_booked_list', 'CandidateController@tickets_booked_list')->name('tickets_booked_list');
    });

    // Visa Process
    Route::group(['prefix' => 'visa-process/', 'as' => 'VisaProcess.'], function () {
        Route::get('required', 'VisaProcessController@visa_required')->name('required');
        Route::get('show-required-candidate/{offered_candidate_id}', 'VisaProcessController@showVisaRequiredCandidate')->name('showVisaRequiredCandidate');
        Route::get('requested', 'VisaProcessController@visa_requested')->name('requested');
        Route::get('show-requested-candidate/{offered_candidate_id}', 'VisaProcessController@showVisaRequestedCandidate')->name('showVisaRequestedCandidate');
        Route::get('approved', 'VisaProcessController@visa_approved')->name('approved');
        Route::get('show-approved-candidate/{offered_candidate_id}', 'VisaProcessController@showVisaApprovedCandidate')->name('showVisaApprovedCandidate');
        Route::get('rejected', 'VisaProcessController@visa_rejected')->name('rejected');
        Route::get('show-rejected-candidate/{offered_candidate_id}', 'VisaProcessController@showVisaRejectedCandidate')->name('showVisaRejectedCandidate');
    });
});
