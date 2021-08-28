<?php

use Illuminate\Support\Facades\Route;

// One Stop Service route
Route::group(['prefix' => 'one-stop-service/', 'namespace' => 'OneStopService', 'as' => 'OneStopService.', 'middleware' => ['auth', 'one-stop-service']], function () {
    Route::get('/dashboard', 'OneStopServiceDashboardController@dashboard')->name('dashboard');
    Route::post('/company-prfile-submit', 'OneStopServiceDashboardController@companyPrfileSubmit')->name('companyPrfileSubmit');

    Route::get('show-company-profile/{user_id}', 'CompanyController@showCompanyProfile')->name('company.showCompanyProfile');
    Route::post('company-request-approve/{company_id}', 'CompanyController@approveNow')->name('company.approveNow');
    Route::post('company-request-reject/{company_id}', 'CompanyController@rejectNow')->name('company.rejectNow');

    // child oss agency
    Route::get('child-osc-request', 'OSCAgencyController@request')->name('childOsc.request');
    Route::get('approved-child-osc', 'OSCAgencyController@approved')->name('childOsc.approved');
    Route::get('rejected-child-osc', 'OSCAgencyController@rejected')->name('childOsc.rejected');

    // medical-agency
    Route::get('medical-agency-request', 'MedicalAgencyController@request')->name('medicalAgency.request');
    Route::get('approved-medical-agency', 'MedicalAgencyController@approved')->name('medicalAgency.approved');
    Route::get('rejected-medical-agency', 'MedicalAgencyController@rejected')->name('medicalAgency.rejected');

    // training-agency
    Route::get('training-agency-request', 'TrainingAgencyController@request')->name('trainingAgency.request');
    Route::get('approved-training-agency', 'TrainingAgencyController@approved')->name('trainingAgency.approved');
    Route::get('rejected-training-agency', 'TrainingAgencyController@rejected')->name('trainingAgency.rejected');

    // travel-agency
    Route::get('travel-agency-request', 'TravelAgencyController@request')->name('travelAgency.request');
    Route::get('approved-travel-agency', 'TravelAgencyController@approved')->name('travelAgency.approved');
    Route::get('rejected-travel-agency', 'TravelAgencyController@rejected')->name('travelAgency.rejected');

    // biometric-agency
    Route::get('biometric-agency-request', 'BiometricAgencyController@request')->name('biometricAgency.request');
    Route::get('approved-biometric-agency', 'BiometricAgencyController@approved')->name('biometricAgency.approved');
    Route::get('rejected-biometric-agency', 'BiometricAgencyController@rejected')->name('biometricAgency.rejected');

    // candidate
    Route::post('request-to-visa/{offered_candidate_id}', 'CandidateController@requestToVisa')->name('candidate.requestToVisa');
    Route::get('show-reviewed-candidate/{offered_candidate_id}', 'CandidateController@showReviewedCandidate')->name('candidate.showReviewedCandidate');
    Route::get('show-final-candidate/{offered_candidate_id}', 'CandidateController@showFinalCandidate')->name('candidate.showFinalCandidate');
    Route::get('show-booked-candidate/{offered_candidate_id}', 'CandidateController@showBookedCandidate')->name('candidate.showBookedCandidate');
    Route::get('assign-selected-candidate/{offered_candidate_id}', 'CandidateController@assignSelectedCandidate')->name('candidate.assignSelectedCandidate');
    Route::get('assign-interview-osc/{offered_candidate_id}', 'CandidateController@assignInterviewOsc')->name('candidate.assignInterviewOsc');
    Route::post('assign-interview-osc-store/{offered_candidate_id}', 'CandidateController@assignInterviewOscStore')->name('candidate.assignInterviewOscStore');
    Route::post('assign-selected-candidate-store/{offered_candidate_id}', 'CandidateController@assignSelectedCandidateStore')->name('candidate.assignSelectedCandidateStore');
    Route::get('selected-candidate', 'CandidateController@selected')->name('candidate.request');
    Route::get('interview-candidate', 'CandidateController@interview')->name('candidate.approved');
    Route::get('finalized-candidate', 'CandidateController@finalized')->name('candidate.rejected');
    Route::get('ticket-booked-candidate', 'CandidateController@ticketBooked')->name('candidate.ticketBooked');

    // Visa Process

    Route::get('approved-visa', 'VisaProcessController@approved')->name('visa.approved');
    Route::get('rejected-visa', 'VisaProcessController@rejected')->name('visa.rejected');
    Route::get('show-visa-approved-candidate/{offered_candidate_id}', 'VisaProcessController@showVisaApprovedCandidate')->name('visa.showVisaApprovedCandidate');
    Route::get('show-visa-rejected-candidate/{offered_candidate_id}', 'VisaProcessController@showVisaRejectedCandidate')->name('visa.showVisaRejectedCandidate');
    // Travel  enquiry
    Route::get('ready-to-travel', 'TravelEnquiryController@readyToTravel')->name('travelEnquiry.readyToTravel');
    Route::get('new-travel-enquiry', 'TravelEnquiryController@newTravel')->name('travelEnquiry.newTravel');
    Route::post('new-travel-enquiry-store', 'TravelEnquiryController@newTravelStore')->name('travelEnquiry.newTravelStore');
    Route::get('posted-travel-enquiry', 'TravelEnquiryController@postedTravel')->name('travelEnquiry.postedTravel');
    Route::get('show-posted-travel-enquiry/{travel_enquiry_id}', 'TravelEnquiryController@ShowPostedTravel')->name('travelEnquiry.ShowPostedTravel');
    Route::get('show-visa-stamping-approved-candidate/{offered_candidate_id}', 'TravelEnquiryController@showVisaStampingApprovedCandidate')->name('travelEnquiry.showVisaStampingApprovedCandidate');

    // Travel  quotations
    Route::get('view-submitted-quotation/{submitted_travel_enquiry_id}', 'TravelQuotationController@viewSubmittedQuotation')->name('travelQuotation.viewSubmittedQuotation');
    Route::get('view-approved-quotation/{submitted_travel_enquiry_id}', 'TravelQuotationController@viewApprovedQuotation')->name('travelQuotation.viewApprovedQuotation');
    Route::post('travel-quotation-approve-now/{submitted_travel_enquiry_id}', 'TravelQuotationController@approveNow')->name('travelQuotation.approveNow');
    Route::post('travel-quotation-reject-now/{submitted_travel_enquiry_id}', 'TravelQuotationController@rejectNow')->name('travelQuotation.rejectNow');
    Route::get('received-travel-quotations', 'TravelQuotationController@received')->name('travelQuotation.received');
    Route::get('approved-travel-quotations', 'TravelQuotationController@approved')->name('travelQuotation.approved');
    Route::get('ticket-booked-travel-enquiry', 'TravelQuotationController@ticketBooked')->name('travelQuotation.ticketBooked');
    Route::get('select-candidates', 'TravelQuotationController@selectCandidates')->name('travelQuotation.selectCandidates');
    Route::get('show-stamping-approved-candidate/{offered_candidate_id}', 'TravelQuotationController@showStampingApprovedCandidate')->name('travelQuotation.showStampingApprovedCandidate');
});
