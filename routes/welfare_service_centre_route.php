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
    Route::get('/meet-greet-request', 'MeetAndGreetController@meet_greet_request')->name('meetGreet.request');
    Route::get('/meet-greet-status/{id}', 'MeetAndGreetController@meetGreetStatus')->name('meetGreet.Status');
    Route::post('/meet-greet-status-update/{id}', 'MeetAndGreetController@meetGreetStatusUpdete')->name('meetGreet.StatusUpdete');
    // Jail deportation
    Route::get('/jail-deportation-request', 'JailDeportationController@request')->name('jailDeportation.request');
    Route::get('/jail-deportation-status/{id}', 'JailDeportationController@jailDeportationStatus')->name('jailDeportation.Status');
    Route::post('/jail-deportation-status-update/{id}', 'JailDeportationController@jailDeportationStatusUpdete')->name('jailDeportation.StatusUpdete');
    // deadbody transfer
    Route::get('/deadbody-transfer-request', 'DeadbodyTransferController@request')->name('deadbodyTransfer.request');
    Route::get('/deadbody-transfer-status/{id}', 'DeadbodyTransferController@deadbodyTransferStatus')->name('deadbodyTransfer.Status');
    Route::post('/deadbody-transfer-status-update/{id}', 'DeadbodyTransferController@deadbodyTransferStatusUpdete')->name('deadbodyTransfer.StatusUpdete');
    // medical compensation
    Route::get('/medical-compensation-request', 'MedicalCompensationController@request')->name('medicalCompensation.request');
    Route::get('/medical-compensation-status/{id}', 'MedicalCompensationController@medicalCompensationStatus')->name('medicalCompensation.Status');
    Route::post('/medical-compensation-status-update/{id}', 'MedicalCompensationController@medicalCompensationStatusUpdete')->name('medicalCompensation.StatusUpdete');
    // insurance compensation
    Route::get('/insurance-request', 'InsuranceController@request')->name('insurance.request');
    Route::get('/insurance-status/{id}', 'InsuranceController@insuranceStatus')->name('insurance.Status');
    Route::post('/insurance-status-update/{id}', 'InsuranceController@insuranceStatusUpdete')->name('insurance.StatusUpdete');

    // issuance certificate
    Route::get('/issuance-certificate-requests', 'IssuanceCertificateController@requests')->name('issuanceCertificate.requests');
    Route::get('/issuance-certificate-status/{id}', 'IssuanceCertificateController@status')->name('issuanceCertificate.status');
    Route::get('/issuance-certificate-upload/{id}', 'IssuanceCertificateController@upload')->name('issuanceCertificate.upload');
    Route::post('/issuance-certificate-update/{id}', 'IssuanceCertificateController@update')->name('issuanceCertificate.update');
    Route::post('/issuance-certificate-details-update/{id}', 'IssuanceCertificateController@detailsUpdate')->name('issuanceCertificate.detailsUpdate');
    Route::post('/issuance-certificate-status-update/{id}', 'IssuanceCertificateController@statusUpdete')->name('issuanceCertificate.statusUpdete');
    Route::get('/certificate-issue-payment', 'IssuanceCertificateController@payment')->name('issuanceCertificate.payment');
    Route::get('/view-issuance-receipt/{id}', 'IssuanceCertificateController@viewReceipt')->name('issuanceCertificate.receipt');
    Route::get('/issuance-certificate-paids', 'IssuanceCertificateController@paids')->name('attestationCertificate.paids');
    Route::get('/issuance-certificate-delivered', 'IssuanceCertificateController@delivered')->name('attestationCertificate.delivered');
    // attestation-certificate
    Route::get('/attestation-certificate-requests', 'AttestationCertificateController@requests')->name('attestationCertificate.requests');
    Route::get('/attestation-certificate-upload/{id}', 'AttestationCertificateController@upload')->name('attestationCertificate.upload');
    Route::post('/attestation-certificate-update/{id}', 'AttestationCertificateController@update')->name('attestationCertificate.update');
    Route::get('/attestation-certificate-payment', 'AttestationCertificateController@payment')->name('attestationCertificate.payment');
    Route::get('/attestation-certificate-receipt/{id}', 'AttestationCertificateController@viewReceipt')->name('attestationCertificate.receipt');
    Route::post('/attestation-certificate-status-update/{id}', 'AttestationCertificateController@statusUpdete')->name('attestationCertificate.statusUpdete');
    Route::get('/attestation-certificate-paids', 'AttestationCertificateController@paids')->name('attestationCertificate.paids');
    Route::get('/attestation-certificate-status/{id}', 'AttestationCertificateController@status')->name('attestationCertificate.status');
    Route::post('/attestation-certificate-details-update/{id}', 'AttestationCertificateController@detailsUpdate')->name('attestationCertificate.detailsUpdate');
    Route::get('/attestation-certificate-delivered', 'AttestationCertificateController@delivered')->name('attestationCertificate.delivered');

    // registration certificates
    Route::get('/registration-certificate-request', 'RegistrationCertificateController@requests')->name('registrationCertificate.requests');
    Route::get('/registration-certificate-upload/{id}', 'RegistrationCertificateController@upload')->name('registrationCertificate.upload');
    Route::post('/registration-certificate-update/{id}', 'RegistrationCertificateController@update')->name('registrationCertificate.update');
    Route::get('/registration-certificate-payment', 'RegistrationCertificateController@payment')->name('registrationCertificate.payment');
    Route::get('/registration-certificate-receipt/{id}', 'RegistrationCertificateController@viewReceipt')->name('registrationCertificate.receipt');
    Route::post('/registration-certificate-status-update/{id}', 'RegistrationCertificateController@statusUpdete')->name('registrationCertificate.statusUpdete');
    Route::get('/registration-certificate-paids', 'RegistrationCertificateController@paids')->name('registrationCertificate.paids');




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
