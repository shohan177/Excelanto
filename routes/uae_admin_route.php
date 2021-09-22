<?php

use Illuminate\Support\Facades\Route;

// UAE Admin route
Route::group(['prefix' => 'uae-admin/', 'namespace' => 'UAEAdmin', 'as' => 'UAEAdmin.', 'middleware' => ['auth', 'uae-admin']], function () {
    Route::get('/dashboard', 'UAEAdminDashboardController@dashboard')->name('dashboard');
    Route::get('/company-profile-view', 'UAEAdminDashboardController@companyPrfileView')->name('companyPrfileView');


    // company
    Route::get('show-company-profile/{user_id}', 'CompanyController@showCompanyProfile')->name('company.showCompanyProfile');
    Route::post('company-request-approve/{company_id}', 'CompanyController@approveNow')->name('company.approveNow');
    Route::post('company-request-reject/{company_id}', 'CompanyController@rejectNow')->name('company.rejectNow');
    // Employer Requests
    Route::get('new-employer-request', 'EmployerRequestController@new')->name('employerRequest.new');
    Route::get('new-employer-request/edit/{id}', 'EmployerRequestController@edit')->name('employerRequest.edit');
    Route::post('new-employer-request/update/{id}', 'EmployerRequestController@update')->name('employerRequest.update');
    Route::get('approved-employer-request', 'EmployerRequestController@approved')->name('employerRequest.approved');
    Route::get('rejected-employer-request', 'EmployerRequestController@rejected')->name('employerRequest.rejected');

    // UAE Embassy
    Route::get('new-uae-embassy-request', 'UAEEmbassyController@new')->name('UAEEmbassy.new');
    Route::get('approved-uae-embassy-request', 'UAEEmbassyController@approved')->name('UAEEmbassy.approved');
    Route::get('rejected-uae-embassy-request', 'UAEEmbassyController@rejected')->name('UAEEmbassy.rejected');

    // job category route
    Route::resource('jobCategory', 'JobCategoryController');

    // Visa Process
    Route::get('requested-visa', 'VisaRequestController@requested')->name('visa.requested');
    Route::get('approved-visa', 'VisaRequestController@approved')->name('visa.approved');
    Route::get('rejected-visa', 'VisaRequestController@rejected')->name('visa.rejected');
    Route::get('visa-status-offered-candidate/{offered_candidate_id}', 'VisaRequestController@visaStatusOfferedCandidate')->name('visa.visaStatusOfferedCandidate');
    Route::post('visa-status-offered-candidate-update/{offered_candidate_id}', 'VisaRequestController@visaStatusOfferedCandidateUpdate')->name('visa.visaStatusOfferedCandidateUpdate');
    Route::get('show-visa-applied-candidate/{offered_candidate_id}', 'VisaRequestController@showVisaAppliedCandidate')->name('visa.showVisaAppliedCandidate');
    Route::get('show-visa-approved-candidate/{offered_candidate_id}', 'VisaRequestController@showVisaApprovedCandidate')->name('visa.showVisaApprovedCandidate');
    Route::get('show-visa-rejected-candidate/{offered_candidate_id}', 'VisaRequestController@showVisaRejectedCandidate')->name('visa.showVisaRejectedCandidate');

    // candidates --- ready to travel
    Route::get('travel-received-candidates', 'CandidateController@travelReceived')->name('candidate.travelReceived');
    Route::get('show-travel-candidate/{offered_candidate_id}', 'CandidateController@travelCandidateProfile')->name('candidate.travelCandidateProfile');
});
