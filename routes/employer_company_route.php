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

    // candidates --- ready to travel
    Route::get('new_candidates', 'CandidateController@new_candidates')->name('new_candidates');
    Route::get('new-candidate-list/{applied_job_id}', 'CandidateController@newCandidateList')->name('candidate.newCandidateList');
    Route::get('show-candidate/{id}', 'CandidateController@show')->name('candidate.show');
    Route::get('show-offered-candidate/{offered_candidate_id}', 'CandidateController@showOfferedCandidate')->name('candidate.showOfferedCandidate');
    Route::get('show-booked-candidate/{offered_candidate_id}', 'CandidateController@showBookedCandidate')->name('candidate.showBookedCandidate');
    Route::get('edit-candidate-result/{id}', 'CandidateController@editCandidateResult')->name('candidate.editCandidateResult');
    Route::post('update-candidate-result/{id}', 'CandidateController@updateCandidateResult')->name('candidate.updateCandidateResult');
    Route::get('edit-interview/{offered_candidate_id}', 'CandidateController@editInterview')->name('candidate.editInterview');
    Route::post('update-interview/{offered_candidate_id}', 'CandidateController@updateInterview')->name('candidate.updateInterview');
    Route::get('candidates_result', 'CandidateController@candidates_result')->name('candidates_result');
    Route::get('finalized_candidates', 'CandidateController@finalized_candidates')->name('finalized_candidates');
    Route::get('tickets_booked_list', 'CandidateController@tickets_booked_list')->name('tickets_booked_list');

    // Visa Process
    Route::get('visa_required', 'VisaProcessController@visa_required')->name('visa_required');
    Route::get('show-visa-required-candidate/{offered_candidate_id}', 'VisaProcessController@showVisaRequiredCandidate')->name('VisaProcess.showVisaRequiredCandidate');
    Route::get('visa_requested', 'VisaProcessController@visa_requested')->name('visa_requested');
    Route::get('show-visa-requested-candidate/{offered_candidate_id}', 'VisaProcessController@showVisaRequestedCandidate')->name('VisaProcess.showVisaRequestedCandidate');
    Route::get('visa_approved', 'VisaProcessController@visa_approved')->name('visa_approved');
    Route::get('show-visa-approved-candidate/{offered_candidate_id}', 'VisaProcessController@showVisaApprovedCandidate')->name('VisaProcess.showVisaApprovedCandidate');
    Route::get('visa_rejected', 'VisaProcessController@visa_rejected')->name('visa_rejected');
    Route::get('show-visa-rejected-candidate/{offered_candidate_id}', 'VisaProcessController@showVisaRejectedCandidate')->name('VisaProcess.showVisaRejectedCandidate');
});
