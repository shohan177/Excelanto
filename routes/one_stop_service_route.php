<?php

use Illuminate\Support\Facades\Route;

// One Stop Service route
Route::group(['prefix' => 'one-stop-service/', 'namespace' => 'OneStopService', 'as' => 'OneStopService.', 'middleware' => ['auth', 'one-stop-service']], function () {
    Route::get('/dashboard', 'OneStopServiceDashboardController@dashboard')->name('dashboard');
    Route::post('/company-prfile-submit', 'OneStopServiceDashboardController@companyPrfileSubmit')->name('companyPrfileSubmit');
    Route::get('/company-profile-view', 'OneStopServiceDashboardController@companyPrfileView')->name('companyPrfileView');


    Route::get('show-company-profile/{user_id}', 'CompanyController@showCompanyProfile')->name('company.showCompanyProfile');
    Route::post('company-request-approve/{company_id}', 'CompanyController@approveNow')->name('company.approveNow');
    Route::post('company-request-reject/{company_id}', 'CompanyController@rejectNow')->name('company.rejectNow');

    // child oss agency
    Route::group(['prefix' => 'child-osc/', 'as' => 'childOsc.'], function () {
        Route::get('request', 'OSCAgencyController@request')->name('request');
        Route::get('approved', 'OSCAgencyController@approved')->name('approved');
        Route::get('rejected', 'OSCAgencyController@rejected')->name('rejected');
    });

    // medical-agency
    Route::group(['prefix' => 'medical-agency/', 'as' => 'medicalAgency.'], function () {
        Route::get('request', 'MedicalAgencyController@request')->name('request');
        Route::get('approved', 'MedicalAgencyController@approved')->name('approved');
        Route::get('rejected', 'MedicalAgencyController@rejected')->name('rejected');
    });

    // training-agency
    Route::group(['prefix' => 'training-agency/', 'as' => 'trainingAgency.'], function () {
        Route::get('request', 'TrainingAgencyController@request')->name('request');
        Route::get('approved', 'TrainingAgencyController@approved')->name('approved');
        Route::get('rejected', 'TrainingAgencyController@rejected')->name('rejected');
    });

    // travel-agency
    Route::group(['prefix' => 'travel-agency/', 'as' => 'travelAgency.'], function () {
        Route::get('request', 'TravelAgencyController@request')->name('request');
        Route::get('approved', 'TravelAgencyController@approved')->name('approved');
        Route::get('rejected', 'TravelAgencyController@rejected')->name('rejected');
    });

    // biometric-agency
    Route::group(['prefix' => 'biometric-agency/', 'as' => 'biometricAgency.'], function () {
        Route::get('request', 'BiometricAgencyController@request')->name('request');
        Route::get('approved', 'BiometricAgencyController@approved')->name('approved');
        Route::get('rejected', 'BiometricAgencyController@rejected')->name('rejected');
    });

    // candidate
    Route::group(['prefix' => 'candidate/', 'as' => 'candidate.'], function () {
        Route::post('request-to-visa/{offered_candidate_id}', 'CandidateController@requestToVisa')->name('requestToVisa');
        Route::get('show-reviewed/{offered_candidate_id}', 'CandidateController@showReviewedCandidate')->name('showReviewedCandidate');
        Route::get('show-final/{offered_candidate_id}', 'CandidateController@showFinalCandidate')->name('showFinalCandidate');
        Route::get('show-booked/{offered_candidate_id}', 'CandidateController@showBookedCandidate')->name('showBookedCandidate');
        Route::get('assign-selected/{offered_candidate_id}', 'CandidateController@assignSelectedCandidate')->name('assignSelectedCandidate');
        Route::get('assign-interview-osc/{offered_candidate_id}', 'CandidateController@assignInterviewOsc')->name('assignInterviewOsc');
        Route::post('assign-interview-osc-store/{offered_candidate_id}', 'CandidateController@assignInterviewOscStore')->name('assignInterviewOscStore');
        Route::post('assign-selected-store/{offered_candidate_id}', 'CandidateController@assignSelectedCandidateStore')->name('assignSelectedCandidateStore');
        Route::get('selected', 'CandidateController@selected')->name('request');
        Route::get('interview', 'CandidateController@interview')->name('approved');
        Route::get('finalized', 'CandidateController@finalized')->name('rejected');
        Route::get('ticket-booked', 'CandidateController@ticketBooked')->name('ticketBooked');
    });

    // Visa Process
    Route::group(['prefix' => 'visa/', 'as' => 'visa.'], function () {
        Route::get('approved', 'VisaProcessController@approved')->name('approved');
        Route::get('rejected', 'VisaProcessController@rejected')->name('rejected');
        Route::get('show-approved-candidate/{offered_candidate_id}', 'VisaProcessController@showVisaApprovedCandidate')->name('showVisaApprovedCandidate');
        Route::get('show-rejected-candidate/{offered_candidate_id}', 'VisaProcessController@showVisaRejectedCandidate')->name('showVisaRejectedCandidate');
    });

    // Travel  enquiry
    Route::group(['prefix' => 'travel-enquiry/', 'as' => 'travelEnquiry.'], function () {
        Route::get('ready-to-travel', 'TravelEnquiryController@readyToTravel')->name('readyToTravel');
        Route::get('new', 'TravelEnquiryController@newTravel')->name('newTravel');
        Route::post('new-store', 'TravelEnquiryController@newTravelStore')->name('newTravelStore');
        Route::get('posted', 'TravelEnquiryController@postedTravel')->name('postedTravel');
        Route::get('show-posted/{travel_enquiry_id}', 'TravelEnquiryController@ShowPostedTravel')->name('ShowPostedTravel');
        Route::get('show-visa-stamping-approved-candidate/{offered_candidate_id}', 'TravelEnquiryController@showVisaStampingApprovedCandidate')->name('showVisaStampingApprovedCandidate');
    });

    // Travel  quotations
    Route::group(['prefix' => 'travel-quotations/', 'as' => 'travelQuotation.'], function () {
        Route::get('view-submitted/{submitted_travel_enquiry_id}', 'TravelQuotationController@viewSubmittedQuotation')->name('viewSubmittedQuotation');
        Route::get('view-approved/{submitted_travel_enquiry_id}', 'TravelQuotationController@viewApprovedQuotation')->name('viewApprovedQuotation');
        Route::post('approve-now/{submitted_travel_enquiry_id}', 'TravelQuotationController@approveNow')->name('approveNow');
        Route::post('reject-now/{submitted_travel_enquiry_id}', 'TravelQuotationController@rejectNow')->name('rejectNow');
        Route::get('received', 'TravelQuotationController@received')->name('received');
        Route::get('approved', 'TravelQuotationController@approved')->name('approved');
        Route::get('ticket-booked-travel-enquiry', 'TravelQuotationController@ticketBooked')->name('ticketBooked');
        Route::get('select-candidates', 'TravelQuotationController@selectCandidates')->name('selectCandidates');
        Route::get('show-stamping-approved-candidate/{offered_candidate_id}', 'TravelQuotationController@showStampingApprovedCandidate')->name('showStampingApprovedCandidate');
    });
});
