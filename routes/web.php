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
