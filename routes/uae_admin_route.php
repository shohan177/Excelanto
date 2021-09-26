<?php

use Illuminate\Support\Facades\Route;

// UAE Admin route
Route::group(['prefix' => 'uae-admin/', 'namespace' => 'UAEAdmin', 'as' => 'UAEAdmin.', 'middleware' => ['auth', 'uae-admin']], function () {
    Route::get('/dashboard', 'UAEAdminDashboardController@dashboard')->name('dashboard');
    Route::get('/company-profile-view', 'UAEAdminDashboardController@companyPrfileView')->name('companyPrfileView');

    // company
    Route::group(['prefix' => 'company/', 'as' => 'company.'], function () {
        Route::get('show-profile/{user_id}', 'CompanyController@showCompanyProfile')->name('showCompanyProfile');
        Route::post('request-approve/{company_id}', 'CompanyController@approveNow')->name('approveNow');
        Route::post('request-reject/{company_id}', 'CompanyController@rejectNow')->name('rejectNow');
    });

    // Employer Requests
    Route::group(['prefix' => 'employer-request/', 'as' => 'employerRequest.'], function () {
        Route::get('new', 'EmployerRequestController@new')->name('new');
        Route::get('new/edit/{id}', 'EmployerRequestController@edit')->name('edit');
        Route::post('new/update/{id}', 'EmployerRequestController@update')->name('update');
        Route::get('approved', 'EmployerRequestController@approved')->name('approved');
        Route::get('rejected', 'EmployerRequestController@rejected')->name('rejected');
    });

    // UAE Embassy
    Route::group(['prefix' => 'uae-embassy/', 'as' => 'UAEEmbassy.'], function () {
        Route::get('new-request', 'UAEEmbassyController@new')->name('new');
        Route::get('approved-request', 'UAEEmbassyController@approved')->name('approved');
        Route::get('rejected-request', 'UAEEmbassyController@rejected')->name('rejected');
    });

    // job category route
    Route::resource('jobCategory', 'JobCategoryController');

    // Visa Process
    Route::group(['prefix' => 'visa/', 'as' => 'visa.'], function () {
        Route::get('requested', 'VisaRequestController@requested')->name('requested');
        Route::get('approved', 'VisaRequestController@approved')->name('approved');
        Route::get('rejected', 'VisaRequestController@rejected')->name('rejected');
        Route::get('status-offered-candidate/{offered_candidate_id}', 'VisaRequestController@visaStatusOfferedCandidate')->name('visaStatusOfferedCandidate');
        Route::post('status-offered-candidate-update/{offered_candidate_id}', 'VisaRequestController@visaStatusOfferedCandidateUpdate')->name('visaStatusOfferedCandidateUpdate');
        Route::get('show-applied-candidate/{offered_candidate_id}', 'VisaRequestController@showVisaAppliedCandidate')->name('showVisaAppliedCandidate');
        Route::get('show-approved-candidate/{offered_candidate_id}', 'VisaRequestController@showVisaApprovedCandidate')->name('showVisaApprovedCandidate');
        Route::get('show-rejected-candidate/{offered_candidate_id}', 'VisaRequestController@showVisaRejectedCandidate')->name('showVisaRejectedCandidate');
    });

    // candidates --- ready to travel
    Route::get('travel-received-candidates', 'CandidateController@travelReceived')->name('candidate.travelReceived');
    Route::get('show-travel-candidate/{offered_candidate_id}', 'CandidateController@travelCandidateProfile')->name('candidate.travelCandidateProfile');
});
