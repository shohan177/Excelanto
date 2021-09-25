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

    // Recruiting agency
    Route::group(['prefix' => 'recruiting-agency/', 'as' => 'recruitingAgency.'], function () {
        Route::post('approve/{company_id}', 'RecruitingAgencieController@approveNow')->name('approveNow');
        Route::post('reject/{company_id}', 'RecruitingAgencieController@rejectNow')->name('rejectNow');
        Route::get('request', 'RecruitingAgencieController@request')->name('request');
        Route::get('approved', 'RecruitingAgencieController@approved')->name('approved');
        Route::get('rejected', 'RecruitingAgencieController@rejected')->name('rejected');
    });

    // One stop services
    Route::group(['prefix' => 'one-stop-services/', 'as' => 'oneStopService.'], function () {
        Route::post('approve/{company_id}', 'OneStopServiceController@approveNow')->name('approveNow');
        Route::post('reject/{company_id}', 'OneStopServiceController@rejectNow')->name('rejectNow');
        Route::get('request', 'OneStopServiceController@request')->name('request');
        Route::get('approved', 'OneStopServiceController@approved')->name('approved');
        Route::get('rejected', 'OneStopServiceController@rejected')->name('rejected');
    });

    // Welfare service centers
    Route::group(['prefix' => 'welfare-service-center/', 'as' => 'welfareServiceCenter.'], function () {
        Route::post('approve/{company_id}', 'WelfareServiceCenterController@approveNow')->name('approveNow');
        Route::post('reject/{company_id}', 'WelfareServiceCenterController@rejectNow')->name('rejectNow');
        Route::get('request', 'WelfareServiceCenterController@request')->name('request');
        Route::get('approved', 'WelfareServiceCenterController@approved')->name('approved');
        Route::get('rejected', 'WelfareServiceCenterController@rejected')->name('rejected');
    });

    // Bangladesh Embassy
    Route::group(['prefix' => 'bangladesh-embassy/', 'as' => 'bangladeshEmbassy.'], function () {
        Route::post('approve/{company_id}', 'BangladeshEmbassyController@approveNow')->name('approveNow');
        Route::post('reject/{company_id}', 'BangladeshEmbassyController@rejectNow')->name('rejectNow');
        Route::get('request', 'BangladeshEmbassyController@request')->name('request');
        Route::get('approved', 'BangladeshEmbassyController@approved')->name('approved');
        Route::get('rejected', 'BangladeshEmbassyController@rejected')->name('rejected');
    });

    //job posts
    Route::get('total-job-post', 'JobPostController@index')->name('total_job_post.index');
    Route::get('job-posts-show/{id}', 'JobPostController@JobPostShow')->name('JobPostShow');
    Route::get('vacancy_approval', 'JobPostController@vacancy_approval')->name('vacancy_approval');
    Route::get('view-vacancy/{applied_job_id}', 'JobPostController@viewVacancy')->name('jobPost.viewVacancy');
    Route::get('approve-vacancy/{applied_job_id}', 'JobPostController@approveVacancy')->name('jobPost.approveVacancy');
    Route::post('approve-vacancy-store/{applied_job_id}', 'JobPostController@approveVacancyStore')->name('jobPost.approveVacancyStore');
    Route::post('reject-vacancy/{applied_job_id}', 'JobPostController@rejectVacancy')->name('jobPost.rejectVacancy');

    //Candidate
    Route::group(['prefix' => 'candidate/', 'as' => 'candidate.'], function () {
        Route::get('requests', 'CandidateController@requests')->name('requests');
        Route::get('view-requested/{applied_job_id}', 'CandidateController@viewRequested')->name('viewRequested');
        Route::get('show/{id}', 'CandidateController@show')->name('show');
        Route::get('show-final-profile/{offered_candidate_id}', 'CandidateController@showFinalCandidate')->name('showFinalCandidate');
        Route::get('show-booked-profile/{offered_candidate_id}', 'CandidateController@showBookedCandidate')->name('showBookedCandidate');
        Route::post('forward/{id}', 'CandidateController@forwardNow')->name('forwardNow');
        Route::post('forward-to-uae/{offered_candidate_id}', 'CandidateController@forwardToUae')->name('forwardToUae');
        Route::get('forwarded', 'CandidateController@forwarded')->name('forwarded');
        Route::get('reviewed', 'CandidateController@reviewed')->name('reviewed');
        Route::get('finalized', 'CandidateController@finalized')->name('finalized');
        Route::get('tickets-booked-List', 'CandidateController@tickets_booked_List')->name('tickets_booked_List');
    });

    //Visa Process
    Route::group(['prefix' => 'visa-process/', 'as' => 'visaProcess.'], function () {
        Route::get('visa-request-candidate/{offered_candidate_id}', 'VisaProcessController@visaRequestCandidate')->name('visaRequestCandidate');
        Route::get('visa-approved-candidate/{offered_candidate_id}', 'VisaProcessController@visaApprovedCandidate')->name('visaApprovedCandidate');
        Route::get('visa-rejected-candidate/{offered_candidate_id}', 'VisaProcessController@visaRejectedCandidate')->name('visaRejectedCandidate');
        Route::get('requests', 'VisaProcessController@requests')->name('requests');
        Route::get('approved', 'VisaProcessController@approved')->name('approved');
        Route::get('rejected', 'VisaProcessController@rejected')->name('rejected');
    });

});
