<?php

use Illuminate\Support\Facades\Route;

// Welfare Company route
Route::group(['prefix' => 'welfare-centre/', 'namespace' => 'WelfareCentre', 'as' => 'WelfareCentre.', 'middleware' => ['auth', 'welfare-centre']], function () {

    Route::get('/dashboard', 'WelfareDashboardController@dashboard')->name('dashboard');
    Route::post('/company-prfile-submit', 'WelfareDashboardController@companyPrfileSubmit')->name('companyPrfileSubmit');
    Route::get('/company-profile-view', 'WelfareDashboardController@companyPrfileView')->name('companyPrfileView');


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

    // Meet & Greet
    Route::group(['prefix' => 'jail-deportation/', 'as' => 'meetGreet.'], function () {
        Route::get('/request', 'MeetAndGreetController@meet_greet_request')->name('request');
        Route::get('/status/{id}', 'MeetAndGreetController@meetGreetStatus')->name('status');
        Route::post('/status-update/{id}', 'MeetAndGreetController@meetGreetStatusUpdete')->name('statusUpdete');
    });

    // Jail deportation
    Route::group(['prefix' => 'jail-deportation/', 'as' => 'jailDeportation.'], function () {
        Route::get('/request', 'JailDeportationController@request')->name('request');
        Route::get('/status/{id}', 'JailDeportationController@jailDeportationStatus')->name('status');
        Route::post('/status-update/{id}', 'JailDeportationController@jailDeportationStatusUpdete')->name('statusUpdete');
    });

    // deadbody transfer
    Route::group(['prefix' => 'deadbody-transfer/', 'as' => 'deadbodyTransfer.'], function () {
        Route::get('/request', 'DeadbodyTransferController@request')->name('request');
        Route::get('/status/{id}', 'DeadbodyTransferController@deadbodyTransferStatus')->name('Status');
        Route::post('/status-update/{id}', 'DeadbodyTransferController@deadbodyTransferStatusUpdete')->name('StatusUpdete');
    });

    // medical compensation
    Route::group(['prefix' => 'medical-compensation/', 'as' => 'medicalCompensation.'], function () {
        Route::get('/request', 'MedicalCompensationController@request')->name('request');
        Route::get('/status/{id}', 'MedicalCompensationController@medicalCompensationStatus')->name('Status');
        Route::post('/status-update/{id}', 'MedicalCompensationController@medicalCompensationStatusUpdete')->name('StatusUpdete');
    });

    // insurance compensation
    Route::group(['prefix' => 'insurance/', 'as' => 'insurance.'], function () {
        Route::get('/request', 'InsuranceController@request')->name('request');
        Route::get('/status/{id}', 'InsuranceController@insuranceStatus')->name('Status');
        Route::post('/status-update/{id}', 'InsuranceController@insuranceStatusUpdete')->name('StatusUpdete');
    });

    // issuance certificate
    Route::group(['prefix' => '/issuance-certificate', 'as' => 'issuanceCertificate.'], function () {
        Route::get('requests', 'IssuanceCertificateController@requests')->name('requests');
        Route::get('status/{id}', 'IssuanceCertificateController@status')->name('status');
        Route::get('upload/{id}', 'IssuanceCertificateController@upload')->name('upload');
        Route::post('update/{id}', 'IssuanceCertificateController@update')->name('update');
        Route::post('details-update/{id}', 'IssuanceCertificateController@detailsUpdate')->name('detailsUpdate');
        Route::post('status-update/{id}', 'IssuanceCertificateController@statusUpdete')->name('statusUpdete');
        Route::get('payment', 'IssuanceCertificateController@payment')->name('payment');
        Route::get('receipt/{id}', 'IssuanceCertificateController@viewReceipt')->name('receipt');
        Route::get('paids', 'IssuanceCertificateController@paids')->name('paids');
        Route::get('delivered', 'IssuanceCertificateController@delivered')->name('delivered');
    });

    // attestation-certificate
    Route::group(['prefix' => '/attestation-certificate', 'as' => 'attestationCertificate.'], function () {
        Route::get('requests', 'AttestationCertificateController@requests')->name('requests');
        Route::get('upload/{id}', 'AttestationCertificateController@upload')->name('upload');
        Route::post('update/{id}', 'AttestationCertificateController@update')->name('update');
        Route::get('payment', 'AttestationCertificateController@payment')->name('payment');
        Route::get('receipt/{id}', 'AttestationCertificateController@viewReceipt')->name('receipt');
        Route::post('status-update/{id}', 'AttestationCertificateController@statusUpdete')->name('statusUpdete');
        Route::get('paids', 'AttestationCertificateController@paids')->name('paids');
        Route::get('status/{id}', 'AttestationCertificateController@status')->name('status');
        Route::post('details-update/{id}', 'AttestationCertificateController@detailsUpdate')->name('detailsUpdate');
        Route::get('delivered', 'AttestationCertificateController@delivered')->name('delivered');
    });

    // registration certificates
    Route::group(['prefix' => '/registration-certificate', 'as' => 'registrationCertificate.'], function () {
        Route::get('request', 'RegistrationCertificateController@requests')->name('requests');
        Route::get('upload/{id}', 'RegistrationCertificateController@upload')->name('upload');
        Route::post('update/{id}', 'RegistrationCertificateController@update')->name('update');
        Route::get('payment', 'RegistrationCertificateController@payment')->name('payment');
        Route::get('receipt/{id}', 'RegistrationCertificateController@viewReceipt')->name('receipt');
        Route::post('status-update/{id}', 'RegistrationCertificateController@statusUpdete')->name('statusUpdete');
        Route::get('paids', 'RegistrationCertificateController@paids')->name('paids');
        Route::get('status/{id}', 'RegistrationCertificateController@status')->name('status');
        Route::post('details-update/{id}', 'RegistrationCertificateController@detailsUpdate')->name('detailsUpdate');
        Route::get('delivered', 'RegistrationCertificateController@delivered')->name('delivered');
    });

    // charity service
    Route::group(['prefix' => 'charity/', 'as' => 'charity.'], function () {
        Route::get('/request', 'CharityServiceController@request')->name('request');
        Route::get('/request-status/{id}', 'CharityServiceController@charityStatus')->name('status');
        Route::post('/request-status-update/{id}', 'CharityServiceController@charityStatusUpdete')->name('statusUpdete');
    });


    // adr service
    Route::group(['prefix' => 'adr/', 'as' => 'adr.'], function () {
        Route::get('/request', 'ADRServiceController@request')->name('request');
        Route::get('/request-status/{id}', 'ADRServiceController@adrStatus')->name('status');
        Route::post('/request-status-update/{id}', 'ADRServiceController@adrStatusUpdete')->name('statusUpdete');
    });

    // legal-by-govt
    Route::group(['prefix' => '/legal-by-govt', 'as' => 'legalByGovt.'], function () {
        Route::get('requests', 'AmnestyServiceController@requests')->name('requests');
        Route::get('upload/{id}', 'AmnestyServiceController@upload')->name('upload');
        Route::post('update/{id}', 'AmnestyServiceController@update')->name('update');
        Route::get('payments', 'AmnestyServiceController@payments')->name('payments');
        Route::get('receipt/{id}', 'AmnestyServiceController@viewReceipt')->name('receipt');
        Route::post('status-update/{id}', 'AmnestyServiceController@statusUpdete')->name('statusUpdete');
        Route::get('paids', 'AmnestyServiceController@paids')->name('paids');
        Route::get('status/{id}', 'AmnestyServiceController@status')->name('status');
        Route::post('details-update/{id}', 'AmnestyServiceController@detailsUpdate')->name('detailsUpdate');
        Route::get('delivery', 'AmnestyServiceController@delivery')->name('delivery');
    });

    // legal-by-regular
    Route::group(['prefix' => '/legal-by-regular', 'as' => 'legalByRegular.'], function () {
        Route::get('requests', 'PaymentServiceController@requests')->name('requests');
        Route::get('upload/{id}', 'PaymentServiceController@upload')->name('upload');
        Route::post('update/{id}', 'PaymentServiceController@update')->name('update');
        Route::get('payments', 'PaymentServiceController@payments')->name('payments');
        Route::get('receipt/{id}', 'PaymentServiceController@viewReceipt')->name('receipt');
        Route::post('status-update/{id}', 'PaymentServiceController@statusUpdete')->name('statusUpdete');
        Route::get('paids', 'PaymentServiceController@paids')->name('paids');
        Route::get('status/{id}', 'PaymentServiceController@status')->name('status');
        Route::post('details-update/{id}', 'PaymentServiceController@detailsUpdate')->name('detailsUpdate');
        Route::get('delivery', 'PaymentServiceController@delivery')->name('delivery');
    });

    // change-of-employer
    Route::group(['prefix' => '/change-of-employer', 'as' => 'changeOfEmployer.'], function () {
        Route::get('requests', 'ChangeEmployerServiceController@requests')->name('requests');
        Route::get('upload/{id}', 'ChangeEmployerServiceController@upload')->name('upload');
        Route::post('update/{id}', 'ChangeEmployerServiceController@update')->name('update');
        Route::get('payments', 'ChangeEmployerServiceController@payments')->name('payments');
        Route::get('receipt/{id}', 'ChangeEmployerServiceController@viewReceipt')->name('receipt');
        Route::post('status-update/{id}', 'ChangeEmployerServiceController@statusUpdete')->name('statusUpdete');
        Route::get('paids', 'ChangeEmployerServiceController@paids')->name('paids');
        Route::get('status/{id}', 'ChangeEmployerServiceController@status')->name('status');
        Route::post('details-update/{id}', 'ChangeEmployerServiceController@detailsUpdate')->name('detailsUpdate');
        Route::get('delivery', 'ChangeEmployerServiceController@delivery')->name('delivery');
    });

    // change-of-visa
    Route::group(['prefix' => '/change-of-visa', 'as' => 'changeOfVisa.'], function () {
        Route::get('requests', 'ChangeVisaServiceController@requests')->name('requests');
        Route::get('upload/{id}', 'ChangeVisaServiceController@upload')->name('upload');
        Route::post('update/{id}', 'ChangeVisaServiceController@update')->name('update');
        Route::get('payments', 'ChangeVisaServiceController@payments')->name('payments');
        Route::get('receipt/{id}', 'ChangeVisaServiceController@viewReceipt')->name('receipt');
        Route::post('status-update/{id}', 'ChangeVisaServiceController@statusUpdete')->name('statusUpdete');
        Route::get('paids', 'ChangeVisaServiceController@paids')->name('paids');
        Route::get('status/{id}', 'ChangeVisaServiceController@status')->name('status');
        Route::post('details-update/{id}', 'ChangeVisaServiceController@detailsUpdate')->name('detailsUpdate');
        Route::get('delivery', 'ChangeVisaServiceController@delivery')->name('delivery');
    });

    // legal-aid-service
    Route::group(['prefix' => 'legal-aid/', 'as' => 'legalAid.'], function () {
        Route::get('/request', 'LegalAidServiceController@request')->name('request');
        Route::get('/status/{id}', 'LegalAidServiceController@status')->name('status');
        Route::post('/status-update/{id}', 'LegalAidServiceController@statusUpdete')->name('statusUpdete');
    });

    // new-passport-service
    Route::group(['prefix' => '/new-passport', 'as' => 'newPassport.'], function () {
        Route::get('requests', 'NewPassportServiceController@requests')->name('requests');
        Route::get('payments', 'NewPassportServiceController@payments')->name('payments');
        Route::get('status', 'NewPassportServiceController@status')->name('status');
        Route::get('delivery', 'NewPassportServiceController@delivery')->name('delivery');
        Route::get('upload/{id}', 'NewPassportServiceController@upload')->name('upload');
        Route::post('update/{id}', 'NewPassportServiceController@update')->name('update');
        Route::get('receipt/{id}', 'NewPassportServiceController@viewReceipt')->name('receipt');
        Route::post('status-update/{id}', 'NewPassportServiceController@statusUpdete')->name('statusUpdete');
        Route::get('delivery-status/{id}', 'NewPassportServiceController@deliveryStatus')->name('deliveryStatus');
        Route::post('details-update/{id}', 'NewPassportServiceController@detailsUpdate')->name('detailsUpdate');
    });

    // lost-passport-service
    Route::group(['prefix' => '/lost-passport', 'as' => 'lostPassport.'], function () {
        Route::get('requests', 'LostPassportServiceController@requests')->name('requests');
        Route::get('payments', 'LostPassportServiceController@payments')->name('payments');
        Route::get('status', 'LostPassportServiceController@status')->name('status');
        Route::get('delivery', 'LostPassportServiceController@delivery')->name('delivery');
        Route::get('upload/{id}', 'LostPassportServiceController@upload')->name('upload');
        Route::post('update/{id}', 'LostPassportServiceController@update')->name('update');
        Route::get('receipt/{id}', 'LostPassportServiceController@viewReceipt')->name('receipt');
        Route::post('status-update/{id}', 'LostPassportServiceController@statusUpdete')->name('statusUpdete');
        Route::get('delivery-status/{id}', 'LostPassportServiceController@deliveryStatus')->name('deliveryStatus');
        Route::post('details-update/{id}', 'LostPassportServiceController@detailsUpdate')->name('detailsUpdate');
    });

    // extension-passport-service
    Route::group(['prefix' => '/extension-passport', 'as' => 'extensionPassport.'], function () {
        Route::get('requests', 'ExtensionPassportServiceController@requests')->name('requests');
        Route::get('payments', 'ExtensionPassportServiceController@payments')->name('payments');
        Route::get('status', 'ExtensionPassportServiceController@status')->name('status');
        Route::get('delivery', 'ExtensionPassportServiceController@delivery')->name('delivery');
        Route::get('upload/{id}', 'ExtensionPassportServiceController@upload')->name('upload');
        Route::post('update/{id}', 'ExtensionPassportServiceController@update')->name('update');
        Route::get('receipt/{id}', 'ExtensionPassportServiceController@viewReceipt')->name('receipt');
        Route::post('status-update/{id}', 'ExtensionPassportServiceController@statusUpdete')->name('statusUpdete');
        Route::get('delivery-status/{id}', 'ExtensionPassportServiceController@deliveryStatus')->name('deliveryStatus');
        Route::post('details-update/{id}', 'ExtensionPassportServiceController@detailsUpdate')->name('detailsUpdate');
    });

    //awareness event
    Route::group(['prefix' => '/awareness-event', 'as' => 'awarenessEvent.'], function () {
        Route::get('/create', 'AwarenessEventController@create')->name('create');
        Route::post('/store', 'AwarenessEventController@store')->name('store');
        Route::get('/show/{id}', 'AwarenessEventController@show')->name('show');
        Route::get('/edit/{id}', 'AwarenessEventController@edit')->name('edit');
        Route::post('/update/{id}', 'AwarenessEventController@update')->name('update');
        Route::get('/upcoming-events', 'AwarenessEventController@upcoming_events')->name('upcoming_events');
        Route::get('/total-events', 'AwarenessEventController@total_events')->name('total_events');
    });
});
