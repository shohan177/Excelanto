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

/*Route::get('/', function () {
    return view('BangladeshAdmin.welcome');
});*/


Route::group(['namespace' => 'BangladeshAdmin'], function () {
    Route::get('/', 'BangladeshAdminDashboardController@dashboard')->name('bangladeshAdmin.dashboard');

    //    Recruiting agency
    Route::get('company_request', 'RecruitingAgencieController@company_request')->name('company_request');
    Route::get('company-approved-request', 'RecruitingAgencieController@company_approved_request')->name('company_approved_request');
    Route::get('company-rejected-request', 'RecruitingAgencieController@company_rejected_request')->name('company_rejected_request');

    //    one stop services
    Route::get('oss-company-request', 'OneStopServiceController@request')->name('request');
    Route::get('oss-approved-request', 'OneStopServiceController@approved')->name('approved');
    Route::get('oss-rejected-request', 'OneStopServiceController@rejected')->name('oneStopService.rejected');

    //    Welfare service centers
    Route::get('welfare-company-request', 'WelfareServiceCenterController@request')->name('welfareServiceCenter.request');
    Route::get('welfare-approved-request', 'WelfareServiceCenterController@approved')->name('welfareServiceCenter.approved');
    Route::get('welfare-rejected-request', 'WelfareServiceCenterController@rejected')->name('welfareServiceCenter.rejected');

    //    Bangladesh Embassy
    Route::get('bangladesh-embassy-request', 'BangladeshEmbassyController@request')->name('bangladeshEmbassy.request');
    Route::get('bangladesh-embassy-approved-request', 'BangladeshEmbassyController@approved')->name('bangladeshEmbassy.approved');
    Route::get('bangladesh-embassy-rejected-request', 'BangladeshEmbassyController@rejected')->name('bangladeshEmbassy.rejected');

    //job posts
    Route::get('total-job-post', 'JobPostController@index')->name('total_job_post.index');
    Route::get('vacancy_approval', 'JobPostController@vacancy_approval')->name('vacancy_approval');

    //Candidate
    Route::get('candidate-requests', 'CandidateController@requests')->name('candidate.requests');
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
Route::group(['prefix' => 'recruiting-agency/', 'namespace' => 'RecruitingAgency', 'as' => 'RecruitingAgency.'], function () {
    Route::get('/dashboard', 'RecruitingAgencyDashboardController@dashboard')->name('dashboard');

    //Job Posts
    Route::get('all-job-post', 'JobPostController@all')->name('jobPost.all');
    Route::get('applied-job-post', 'JobPostController@applied')->name('jobPost.applied');

    //Candidates
    Route::get('new-candidates', 'CandidateController@new')->name('candidate.new');
    Route::get('all-candidates', 'CandidateController@all')->name('candidate.all');
    Route::get('selected-candidates', 'CandidateController@selected')->name('candidate.selected');
    Route::get('view-selected-candidates', 'CandidateController@viewSelected')->name('candidate.viewSelected');
});
