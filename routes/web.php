<?php

use App\Candidate;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
/*Route::get('/', 'HomeController@index')->name('admin.login');*/

// Super Admin route

Route::group(['prefix' => 'super-admin/', 'namespace' => 'SuperAdmin', 'as' => 'SuperAdmin.', 'middleware' => ['auth', 'super-admin']], function () {
    Route::get('/dashboard', 'SuperAdminDashboardController@dashboard')->name('dashboard');
    Route::resource('role', 'RoleController');
    Route::resource('country', 'CountryController');
});


// Bangladesh Admin route
Route::group(['prefix' => 'bangladesh-admin/', 'namespace' => 'BangladeshAdmin', 'as' => 'BangladeshAdmin.', 'middleware' => ['auth', 'bangladesh-admin']], function () {
    Route::get('/dashboard', 'BangladeshAdminDashboardController@dashboard')->name('dashboard');


    //    Recruiting agency
    Route::get('company_request', 'RecruitingAgencieController@company_request')->name('company_request');
    Route::post('company_request-approve/{company_id}', 'RecruitingAgencieController@approveNow')->name('company_requestApprove');
    Route::post('company_request-reject/{company_id}', 'RecruitingAgencieController@rejectNow')->name('company_requestReject');
    Route::get('company-approved-request', 'RecruitingAgencieController@company_approved_request')->name('company_approved_request');
    Route::get('company-rejected-request', 'RecruitingAgencieController@company_rejected_request')->name('company_rejected_request');

    //    one stop services
    Route::post('oss-company-request-approve/{company_id}', 'OneStopServiceController@approveNow')->name('oneStopService.approveNow');
    Route::post('oss-company-request-reject/{company_id}', 'OneStopServiceController@rejectNow')->name('oneStopService.rejectNow');
    Route::get('oss-company-request', 'OneStopServiceController@request')->name('request');
    Route::get('oss-approved-request', 'OneStopServiceController@approved')->name('approved');
    Route::get('oss-rejected-request', 'OneStopServiceController@rejected')->name('oneStopService.rejected');

    //    Welfare service centers
    Route::post('welfare-company-request-approve/{company_id}', 'WelfareServiceCenterController@approveNow')->name('welfareServiceCenter.approveNow');
    Route::post('welfare-company-request-reject/{company_id}', 'WelfareServiceCenterController@rejectNow')->name('welfareServiceCenter.rejectNow');
    Route::get('welfare-company-request', 'WelfareServiceCenterController@request')->name('welfareServiceCenter.request');
    Route::get('welfare-approved-request', 'WelfareServiceCenterController@approved')->name('welfareServiceCenter.approved');
    Route::get('welfare-rejected-request', 'WelfareServiceCenterController@rejected')->name('welfareServiceCenter.rejected');

    //    Bangladesh Embassy
    Route::post('bangladesh-embassy-request-approve/{company_id}', 'BangladeshEmbassyController@approveNow')->name('bangladeshEmbassy.approveNow');
    Route::post('bangladesh-embassy-request-reject/{company_id}', 'BangladeshEmbassyController@rejectNow')->name('bangladeshEmbassy.rejectNow');
    Route::get('bangladesh-embassy-request', 'BangladeshEmbassyController@request')->name('bangladeshEmbassy.request');
    Route::get('bangladesh-embassy-approved-request', 'BangladeshEmbassyController@approved')->name('bangladeshEmbassy.approved');
    Route::get('bangladesh-embassy-rejected-request', 'BangladeshEmbassyController@rejected')->name('bangladeshEmbassy.rejected');

    Route::get('company_request', 'RecruitingAgencieController@company_request')->name('company_request');

    //    one stop services
    Route::get('oss_company_request', 'OneStopServiceController@oss_company_request')->name('oss_company_request');
    Route::get('oss_approved_request', 'OneStopServiceController@oss_approved_request')->name('oss_approved_request');
    Route::get('oss_rejected_request', 'OneStopServiceController@oss_rejected_request')->name('oss_rejected_request');

    //    Welfare service centers
    Route::get('welfare_company_request', 'WelfareServiceCenterController@welfare_company_request')->name('welfare_company_request');
    Route::get('welfare_approved_request', 'WelfareServiceCenterController@welfare_approved_request')->name('welfare_approved_request');
    Route::get('welfare_rejected_request', 'WelfareServiceCenterController@welfare_rejected_request')->name('welfare_rejected_request');

    //    Bangladesh Embassy
    Route::get('bangladesh_embassy_request', 'BangladeshEmbassyController@bangladesh_embassy_request')->name('bangladesh_embassy_request');
    Route::get('bangladesh_embassy_approved_request', 'BangladeshEmbassyController@bangladesh_embassy_approved_request')->name('bangladesh_embassy_approved_request');
    Route::get('bangladesh_embassy_rejected_request', 'BangladeshEmbassyController@bangladesh_embassy_rejected_request')->name('bangladesh_embassy_rejected_request');


    //job posts
    Route::get('total-job-post', 'JobPostController@index')->name('total_job_post.index');
    Route::get('job-posts-show/{id}', 'JobPostController@JobPostShow')->name('JobPostShow');
    Route::get('vacancy_approval', 'JobPostController@vacancy_approval')->name('vacancy_approval');
    Route::get('view-vacancy/{applied_job_id}', 'JobPostController@viewVacancy')->name('jobPost.viewVacancy');
    Route::get('approve-vacancy/{applied_job_id}', 'JobPostController@approveVacancy')->name('jobPost.approveVacancy');
    Route::post('approve-vacancy-store/{applied_job_id}', 'JobPostController@approveVacancyStore')->name('jobPost.approveVacancyStore');
    Route::post('reject-vacancy/{applied_job_id}', 'JobPostController@rejectVacancy')->name('jobPost.rejectVacancy');

    //Candidate
    Route::get('candidate-requests', 'CandidateController@requests')->name('candidate.requests');
    Route::get('view-requested-candidates/{applied_job_id}', 'CandidateController@viewRequested')->name('candidate.viewRequested');

    Route::get('show-candidate/{id}', 'CandidateController@show')->name('candidate.show');
    Route::post('forward-candidate/{id}', 'CandidateController@forwardNow')->name('candidate.forwardNow');
    Route::get('candidate-forwarded', 'CandidateController@forwarded')->name('candidate.forwarded');
    Route::get('candidate-reviewed', 'CandidateController@reviewed')->name('candidate.reviewed');
    Route::get('candidate-finalized', 'CandidateController@finalized')->name('candidate.finalized');
    Route::get('tickets-booked-List', 'CandidateController@tickets_booked_List')->name('candidate.tickets_booked_List');

    //Visa Process
    Route::get('visa-process-requests', 'VisaProcessController@requests')->name('visa_process.requests');
    Route::get('visa-process-approved', 'VisaProcessController@approved')->name('visa_process.approved');
    Route::get('visa-process-rejected', 'VisaProcessController@rejected')->name('visa_process.rejected');

});


// recruiting agency route
Route::group(['prefix' => 'recruiting-agency/', 'namespace' => 'RecruitingAgency', 'as' => 'RecruitingAgency.', 'middleware' => ['auth', 'recruiting-agency']], function () {
    Route::get('/dashboard', 'RecruitingAgencyDashboardController@dashboard')->name('dashboard');
    Route::post('/company-prfile-submit', 'RecruitingAgencyDashboardController@companyPrfileSubmit')->name('companyPrfileSubmit');

    //Job Posts
    Route::get('all-job-post', 'JobPostController@all')->name('jobPost.all');
    Route::get('show-job-post/{id}', 'JobPostController@show')->name('jobPost.show');
    Route::get('select-candidates/{applied_job_id}', 'JobPostController@selectCandidates')->name('jobPost.selectCandidates');
    Route::get('edit-job-post/{id}', 'JobPostController@edit')->name('jobPost.edit');
    Route::post('update-job-post/{id}', 'JobPostController@update')->name('jobPost.update');
    Route::get('applied-job', 'AppliedJobController@applied')->name('appliedJob.applied');
    Route::get('show-applied-job/{id}', 'AppliedJobController@show')->name('appliedJob.show');

    //Candidates
    Route::get('new-candidates', 'CandidateController@new')->name('candidate.new');
    Route::post('approve-candidate/{candidate_id}/{applied_job_id}', 'CandidateController@approveNow')->name('candidate.approveNow');
    Route::post('reject-candidate/{id}', 'CandidateController@rejectNow')->name('candidate.rejectNow');
    Route::post('store-candidates', 'CandidateController@store')->name('candidate.store');
    Route::get('all-candidates', 'CandidateController@all')->name('candidate.all');
    Route::get('show-candidate/{id}', 'CandidateController@show')->name('candidate.show');
    Route::get('selected-candidates', 'CandidateController@selected')->name('candidate.selected');

    Route::get('view-selected-candidates', 'CandidateController@viewSelected')->name('candidate.viewSelected');


    Route::get('view-selected-candidates/{id}', 'CandidateController@viewSelected')->name('candidate.viewSelected');

});

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
    Route::get('/travel_received_list', 'TravelCandidatesController@TravelCandidates')->name('TravelCandidates');

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

// UAE Admin route
Route::group(['prefix' => 'uae-admin/', 'namespace' => 'UAEAdmin', 'as' => 'UAEAdmin.', 'middleware' => ['auth', 'uae-admin']], function () {
    Route::get('/dashboard', 'UAEAdminDashboardController@dashboard')->name('dashboard');

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

    // candidates --- ready to travel
    Route::get('travel-received-candidates', 'CandidateController@travelReceived')->name('candidate.travelReceived');
});



// One Stop Service route
Route::group(['prefix' => 'one-stop-service/', 'namespace' => 'OneStopService', 'as' => 'OneStopService.', 'middleware' => ['auth', 'one-stop-service']], function () {
    Route::get('/dashboard', 'OneStopServiceDashboardController@dashboard')->name('dashboard');
    Route::post('/company-prfile-submit', 'OneStopServiceDashboardController@companyPrfileSubmit')->name('companyPrfileSubmit');


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
    Route::get('show-reviewed-candidate/{Offered_candidate_id}', 'CandidateController@showReviewedCandidate')->name('candidate.showReviewedCandidate');
    Route::get('assign-selected-candidate/{Offered_candidate_id}', 'CandidateController@assignSelectedCandidate')->name('candidate.assignSelectedCandidate');
    Route::post('assign-selected-candidate-store/{Offered_candidate_id}', 'CandidateController@assignSelectedCandidateStore')->name('candidate.assignSelectedCandidateStore');
    Route::get('selected-candidate', 'CandidateController@selected')->name('candidate.request');
    Route::get('selected-candidate', 'CandidateController@selected')->name('candidate.request');
    Route::get('interview-candidate', 'CandidateController@interview')->name('candidate.approved');
    Route::get('finalized-candidate', 'CandidateController@finalized')->name('candidate.rejected');
    Route::get('ticket-booked-candidate', 'CandidateController@ticketBooked')->name('candidate.ticketBooked');

    // Visa Process
    Route::get('approved-visa', 'VisaProcessController@approved')->name('visa.approved');
    Route::get('rejected-visa', 'VisaProcessController@rejected')->name('visa.rejected');

    // Travel  enquiry
    Route::get('ready-to-travel', 'TravelEnquiryController@readyToTravel')->name('travelEnquiry.readyToTravel');
    Route::get('new-travel-enquiry', 'TravelEnquiryController@newTravel')->name('travelEnquiry.newTravel');
    Route::get('posted-travel-enquiry', 'TravelEnquiryController@postedTravel')->name('travelEnquiry.postedTravel');

    // Travel  quotations
    Route::get('received-travel-quotations', 'TravelQuotationController@received')->name('travelQuotation.received');
    Route::get('approved-travel-quotations', 'TravelQuotationController@approved')->name('travelQuotation.approved');
    Route::get('ticket-booked-travel-enquiry', 'TravelQuotationController@ticketBooked')->name('travelQuotation.ticketBooked');
});


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
    // Route::get('candidate-edit/{id}', 'CandidateController@edit')->name('candidate.edit');
    // Route::post('candidate-update/{id}', 'CandidateController@update')->name('candidate.update');
    Route::get('edit-candidate-result/{id}', 'CandidateController@editCandidateResult')->name('candidate.editCandidateResult');
    Route::post('update-candidate-result/{id}', 'CandidateController@updateCandidateResult')->name('candidate.updateCandidateResult');
    Route::get('candidates_result', 'CandidateController@candidates_result')->name('candidates_result');
    Route::get('finalized_candidates', 'CandidateController@finalized_candidates')->name('finalized_candidates');
    Route::get('tickets_booked_list', 'CandidateController@tickets_booked_list')->name('tickets_booked_list');

    // Visa Process
    Route::get('visa_required', 'VisaProcessController@visa_required')->name('visa_required');
    Route::get('visa_requested', 'VisaProcessController@visa_requested')->name('visa_requested');
    Route::get('visa_approved', 'VisaProcessController@visa_approved')->name('visa_approved');
    Route::get('visa_rejected', 'VisaProcessController@visa_rejected')->name('visa_rejected');
});

// Bangladesh Embassy route
Route::group(['prefix' => 'bangladesh-embassy/', 'namespace' => 'BangladeshEmbassy', 'as' => 'BangladeshEmbassy.', 'middleware' => ['auth', 'bangladesh-embassy']], function () {
    Route::get('/dashboard', 'BangladeshEmbassyDashboardController@dashboard')->name('dashboard');

    Route::post('/company-prfile-submit', 'BangladeshEmbassyDashboardController@companyPrfileSubmit')->name('companyPrfileSubmit');

    // Visa Process
    Route::get('received-employer-demand', 'EmployerDemandController@received')->name('employerDemand.received');
    Route::get('edit-employer-demand/{id}', 'EmployerDemandController@edit')->name('employerDemand.edit');
    Route::post('update-employer-demand/{id}', 'EmployerDemandController@update')->name('employerDemand.update');
    Route::get('approved-employer-demand', 'EmployerDemandController@approved')->name('employerDemand.approved');
    Route::get('rejected-employer-demand', 'EmployerDemandController@rejected')->name('employerDemand.rejected');
    Route::get('show-employer-demand/{id}', 'EmployerDemandController@show')->name('employerDemand.show');
});

Auth::routes([
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

/*Route::get('/home', 'HomeController@index')->name('home');*/
