<?php

use Illuminate\Support\Facades\Route;

// Bangladesh Admin route
Route::group(['prefix' => 'bangladesh-admin/', 'namespace' => 'BangladeshAdmin', 'as' => 'BangladeshAdmin.', 'middleware' => ['auth', 'bangladesh-admin']], function () {
    Route::get('/dashboard', 'BangladeshAdminDashboardController@dashboard')->name('dashboard');
    Route::get('/company-profile-view', 'BangladeshAdminDashboardController@companyPrfileView')->name('companyPrfileView');

    // company
    Route::get('show-company-profile/{user_id}', 'CompanyController@showCompanyProfile')->name('company.showCompanyProfile');
    Route::post('company-request-approve/{company_id}', 'CompanyController@approveNow')->name('company.approveNow');
    Route::post('company-request-reject/{company_id}', 'CompanyController@rejectNow')->name('company.rejectNow');

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
    Route::get('show-final-candidate-profile/{offered_candidate_id}', 'CandidateController@showFinalCandidate')->name('candidate.showFinalCandidate');
    Route::get('show-booked-candidate-profile/{offered_candidate_id}', 'CandidateController@showBookedCandidate')->name('candidate.showBookedCandidate');
    Route::post('forward-candidate/{id}', 'CandidateController@forwardNow')->name('candidate.forwardNow');
    Route::post('forward-to-uae/{offered_candidate_id}', 'CandidateController@forwardToUae')->name('candidate.forwardToUae');
    Route::get('candidate-forwarded', 'CandidateController@forwarded')->name('candidate.forwarded');
    Route::get('candidate-reviewed', 'CandidateController@reviewed')->name('candidate.reviewed');
    Route::get('candidate-finalized', 'CandidateController@finalized')->name('candidate.finalized');
    Route::get('tickets-booked-List', 'CandidateController@tickets_booked_List')->name('candidate.tickets_booked_List');

    //Visa Process
    Route::get('visa-request-candidate/{offered_candidate_id}', 'VisaProcessController@visaRequestCandidate')->name('visa_process.visaRequestCandidate');
    Route::get('visa-approved-candidate/{offered_candidate_id}', 'VisaProcessController@visaApprovedCandidate')->name('visa_process.visaApprovedCandidate');
    Route::get('visa-rejected-candidate/{offered_candidate_id}', 'VisaProcessController@visaRejectedCandidate')->name('visa_process.visaRejectedCandidate');
    Route::get('visa-process-requests', 'VisaProcessController@requests')->name('visa_process.requests');
    Route::get('visa-process-approved', 'VisaProcessController@approved')->name('visa_process.approved');
    Route::get('visa-process-rejected', 'VisaProcessController@rejected')->name('visa_process.rejected');
});
