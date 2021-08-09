<?php

use Illuminate\Support\Facades\Route;


// Child One Stop Service
Route::group(['prefix' => 'child-one-stop-service/', 'namespace' => 'OneStopService_Child', 'as' => 'OneStopService_Child.', 'middleware' => ['auth', 'child-one-stop-service']], function () {
    Route::get('/dashboard', 'OneStopService_ChildDashboardController@dashboard')->name('dashboard');
    Route::get('/company-profile-view', 'OneStopService_ChildDashboardController@companyPrfileView')->name('companyPrfileView');
    Route::post('/company-profile-submit', 'OneStopService_ChildDashboardController@companyPrfileSubmit')->name('companyPrfileSubmit');

    Route::get('show-company-profile/{user_id}', 'CompanyController@showCompanyProfile')->name('company.showCompanyProfile');
    // medical-agency
    Route::get('medical-agencies', 'MedicalAgencyController@all')->name('medicalAgency.all');

    // training-agency
    Route::get('training-agencies', 'TrainingAgencyController@all')->name('trainingAgency.all');

    //Candidate
    Route::get('show-candidate-profile/{offered_candidate_id}', 'CandidateController@showCandidateProfile')->name('candidate.showCandidateProfile');
    Route::get('show-final-candidate-profile/{offered_candidate_id}', 'CandidateController@showFinalCandidateProfile')->name('candidate.showFinalCandidateProfile');
    Route::get('show-biometric-candidate-profile/{offered_candidate_id}', 'CandidateController@showBiometricCandidateProfile')->name('candidate.showBiometricCandidateProfile');
    Route::get('interview-status/{offered_candidate_id}', 'CandidateController@interviewStatus')->name('candidate.interviewStatus');
    Route::post('interview-status-store/{offered_candidate_id}', 'CandidateController@interviewStatusStore')->name('candidate.interviewStatusStore');
    Route::post('initial-payment-store/{offered_candidate_id}', 'CandidateController@initialPaymentStore')->name('candidate.initialPaymentStore');
    Route::get('initial-payment/{offered_candidate_id}', 'CandidateController@initialPayment')->name('candidate.initialPayment');
    Route::get('selected-candidate', 'CandidateController@selected')->name('candidate.request');
    Route::get('interview-candidate', 'CandidateController@interview')->name('candidate.approved');
    Route::get('finalized-candidate', 'CandidateController@finalized')->name('candidate.finalized');
    Route::post('candidate-status-change/{offered_candidate_id}/{result_status}', 'CandidateController@candidateStatusChange')->name('candidate.candidateStatusChange');

    //Biometric Candidate
    Route::get('required-biometric', 'BiometricController@required')->name('biometric.required');
    Route::get('completed-biometric', 'BiometricController@completed')->name('biometric.completed');

    // Visa Process
    Route::get('requested-visa', 'VisaProcessController@requested')->name('visa.requested');
    Route::get('approved-visa', 'VisaProcessController@approved')->name('visa.approved');
    Route::get('rejected-visa', 'VisaProcessController@rejected')->name('visa.rejected');

});
