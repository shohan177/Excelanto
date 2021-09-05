<?php

use Illuminate\Support\Facades\Route;

// Welfare Company route
Route::group(['prefix' => 'welfare-centre/', 'namespace' => 'WelfareCentre', 'as' => 'WelfareCentre.', 'middleware' => ['auth', 'welfare-centre']], function () {

    Route::get('/dashboard', 'WelfareDashboardController@dashboard')->name('dashboard');
    Route::post('/company-prfile-submit', 'WelfareDashboardController@companyPrfileSubmit')->name('companyPrfileSubmit');

    //Job Approval
    Route::get('/new-job-posts', 'JobApprovalController@NewJobPost')->name('NewJobPost');
    Route::get('/new-job-posts-show/{id}', 'JobApprovalController@NewJobPostShow')->name('NewJobPostShow');
    Route::get('/edit-job-posts/{id}', 'JobApprovalController@EditJobPost')->name('EditJobPost');
    Route::post('/job-post-update', 'JobApprovalController@postUpdate')->name('postUpdate');
    Route::get('/job-approved', 'JobApprovalController@jobApproved')->name('jobApproved');

    //Travel Candidates
    Route::get('/travel_received_list', 'TravelCandidatesController@readyToTravel')->name('travelCandidate.readyToTravel');
    Route::get('/show-received-candidate/{offered_candidate_id}', 'TravelCandidatesController@showReceivedCandidate')->name('travelCandidate.showReceivedCandidate');

    //candidate
    Route::get('/show-candidate-profile/{offered_candidate_id}', 'CandidateController@showCandidateProfile')->name('showCandidateProfile');
    //WSC registered
    Route::get('/meet-greet-request', 'WSC_RegisteredController@meet_greet_request')->name('meet_greet_request');
    Route::get('/jail-deportation-request', 'WSC_RegisteredController@jail_deportation_request')->name('jail_deportation_request');
    Route::get('/deadbody-transfer-request', 'WSC_RegisteredController@deadbody_transfer_request')->name('deadbody_transfer_request');

    Route::get('/medical-compensation-request', 'WSC_RegisteredController@medical_compensation_request')->name('medical_compensation_request');
    Route::get('/insurance_request', 'WSC_RegisteredController@insurance_request')->name('insurance_request');

    //certificate
    Route::get('/issuance_certificate_requests', 'WSC_RegisteredController@issuance_certificate_requests')->name('issuance_certificate_requests');
    Route::get('/certificate_issue_payment', 'WSC_RegisteredController@certificate_issue_payment')->name('certificate_issue_payment');
    Route::get('/issuance_certificate', 'WSC_RegisteredController@issuance_certificate')->name('issuance_certificate');
    Route::get('/issuance_delivery_status', 'WSC_RegisteredController@issuance_delivery_status')->name('issuance_delivery_status');

    Route::get('/attestation_certificate_requests', 'WSC_RegisteredController@attestation_certificate_requests')->name('attestation_certificate_requests');
    Route::get('/certificate_attestation_payment', 'WSC_RegisteredController@certificate_attestation_payment')->name('certificate_attestation_payment');
    Route::get('/attestation_certificate', 'WSC_RegisteredController@attestation_certificate')->name('attestation_certificate');
    Route::get('/attestation_delivery_status', 'WSC_RegisteredController@attestation_delivery_status')->name('attestation_delivery_status');

    Route::get('/registration_certificate_requests', 'WSC_RegisteredController@registration_certificate_requests')->name('registration_certificate_requests');
    Route::get('/certificate_registration_payment', 'WSC_RegisteredController@certificate_registration_payment')->name('certificate_registration_payment');
    Route::get('/registration_certificate', 'WSC_RegisteredController@registration_certificate')->name('registration_certificate');
    Route::get('/registration_delivery_status', 'WSC_RegisteredController@registration_delivery_status')->name('registration_delivery_status');

    Route::get('/charity_request', 'WSC_RegisteredController@charity_request')->name('charity_request');
    Route::get('/adr_request', 'WSC_RegisteredController@adr_request')->name('adr_request');

    Route::get('/legal_by_govt_request', 'WSC_RegisteredController@legal_by_govt_request')->name('legal_by_govt_request');
    Route::get('/legal_by_govt_payment', 'WSC_RegisteredController@legal_by_govt_payment')->name('legal_by_govt_payment');
    Route::get('/legal_by_govt_paid', 'WSC_RegisteredController@legal_by_govt_paid')->name('legal_by_govt_paid');
    Route::get('/legal_by_govt_delivery', 'WSC_RegisteredController@legal_by_govt_delivery')->name('legal_by_govt_delivery');

    Route::get('/legal_regular_request', 'WSC_RegisteredController@legal_regular_request')->name('legal_regular_request');
    Route::get('/legal_regular_payment', 'WSC_RegisteredController@legal_regular_payment')->name('legal_regular_payment');
    Route::get('/legal_regular_paid', 'WSC_RegisteredController@legal_regular_paid')->name('legal_regular_paid');
    Route::get('/legal_regular_delivery', 'WSC_RegisteredController@legal_regular_delivery')->name('legal_regular_delivery');

    Route::get('/change_emp_request', 'WSC_RegisteredController@change_emp_request')->name('change_emp_request');
    Route::get('/change_emp_payment', 'WSC_RegisteredController@change_emp_payment')->name('change_emp_payment');
    Route::get('/change_emp_paid', 'WSC_RegisteredController@change_emp_paid')->name('change_emp_paid');
    Route::get('/change_emp_delivery', 'WSC_RegisteredController@change_emp_delivery')->name('change_emp_delivery');

    Route::get('/change_visa_request', 'WSC_RegisteredController@change_visa_request')->name('change_visa_request');
    Route::get('/change_visa_payment', 'WSC_RegisteredController@change_visa_payment')->name('change_visa_payment');
    Route::get('/change_visa_paid', 'WSC_RegisteredController@change_visa_paid')->name('change_visa_paid');
    Route::get('/change_visa_delivery', 'WSC_RegisteredController@change_visa_delivery')->name('change_visa_delivery');

    Route::get('/legal_aid_request', 'WSC_RegisteredController@legal_aid_request')->name('legal_aid_request');

    Route::get('/new_passport_request', 'WSC_RegisteredController@new_passport_request')->name('new_passport_request');
    Route::get('/new_passport_payment', 'WSC_RegisteredController@new_passport_payment')->name('new_passport_payment');
    Route::get('/new_passport_status', 'WSC_RegisteredController@new_passport_status')->name('new_passport_status');
    Route::get('/new_passport_delivery', 'WSC_RegisteredController@new_passport_delivery')->name('new_passport_delivery');

    Route::get('/lost_passport_request', 'WSC_RegisteredController@lost_passport_request')->name('lost_passport_request');
    Route::get('/lost_passport_payment', 'WSC_RegisteredController@lost_passport_payment')->name('lost_passport_payment');
    Route::get('/lost_passport_status', 'WSC_RegisteredController@lost_passport_status')->name('lost_passport_status');
    Route::get('/lost_passport_delivery', 'WSC_RegisteredController@lost_passport_delivery')->name('lost_passport_delivery');

    Route::get('/renew_passport_request', 'WSC_RegisteredController@renew_passport_request')->name('renew_passport_request');
    Route::get('/renew_passport_payment', 'WSC_RegisteredController@renew_passport_payment')->name('renew_passport_payment');
    Route::get('/renew_passport_status', 'WSC_RegisteredController@renew_passport_status')->name('renew_passport_status');
    Route::get('/renew_passport_delivery', 'WSC_RegisteredController@renew_passport_delivery')->name('renew_passport_delivery');

    //awareness event
    Route::get('/create-awareness-event', 'AwarenessEventController@create')->name('awarenessevent.create');
    Route::post('/store-awareness-event', 'AwarenessEventController@store')->name('awarenessevent.store');
    Route::get('/show-awareness-event/{id}', 'AwarenessEventController@show')->name('awarenessevent.show');
    Route::get('/edit-awareness-event/{id}', 'AwarenessEventController@edit')->name('awarenessevent.edit');
    Route::post('/update-awareness-event/{id}', 'AwarenessEventController@update')->name('awarenessevent.update');
    Route::get('/upcoming-events', 'AwarenessEventController@upcoming_events')->name('awarenessevent.upcoming_events');
    Route::get('/total-events', 'AwarenessEventController@total_events')->name('awarenessevent.total_events');
});
