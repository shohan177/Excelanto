<?php

use Illuminate\Support\Facades\Route;

// TravelAgency
Route::group(['prefix' => 'travel-agency/', 'namespace' => 'TravelAgency', 'as' => 'TravelAgency.', 'middleware' => ['auth', 'travel-agency']], function () {
    Route::get('/dashboard', 'TravelAgencyDashboardController@dashboard')->name('dashboard');
    Route::get('/company-profile-view', 'TravelAgencyDashboardController@companyPrfileView')->name('companyPrfileView');
    Route::post('/company-profile-submit', 'TravelAgencyDashboardController@companyPrfileSubmit')->name('companyPrfileSubmit');

    // Company
    Route::get('show-company-profile/{user_id}', 'CompanyController@showCompanyProfile')->name('company.showCompanyProfile');
    Route::post('company-request-approve/{company_id}', 'CompanyController@approveNow')->name('company.approveNow');
    Route::post('company-request-reject/{company_id}', 'CompanyController@rejectNow')->name('company.rejectNow');

    // Enquiries
    Route::group(['prefix' => 'enquiries/', 'as' => 'enquiries.'], function () {
        Route::get('/new', 'EnquiriesController@new')->name('new');
        Route::get('/expired', 'EnquiriesController@expired')->name('expired');
        Route::get('/view/{id}', 'EnquiriesController@view')->name('view');
        Route::get('/apply/{id}', 'EnquiriesController@apply')->name('apply');
        Route::get('/apply-store/{id}', 'EnquiriesController@applyStore')->name('applyStore');
    });

    // Quotations
    Route::group(['prefix' => 'quotations/', 'as' => 'quotations.'], function () {
        Route::get('/submitted', 'QuotationsController@submitted')->name('submitted');
        Route::get('/view/{id}', 'QuotationsController@view')->name('view');
        Route::get('/view-approved/{id}', 'QuotationsController@viewApproved')->name('viewApproved');
        Route::get('/view-travel-candidates/{id}', 'QuotationsController@viewTravelCandidates')->name('viewTravelCandidates');
        Route::get('/approved', 'QuotationsController@approved')->name('approved');
    });


    // Travel Tickets
    Route::group(['prefix' => 'travel/', 'as' => 'travel.'], function () {
        Route::get('/required', 'TravelTicketsController@required')->name('required');
        Route::get('/add-ticket/{offered_candidate_id}', 'TravelTicketsController@addTicket')->name('addTicket');
        Route::post('/ticket-store/{offered_candidate_id}', 'TravelTicketsController@ticketStore')->name('ticketStore');
        Route::get('/view-stamping-approve/{offered_candidate_id}', 'TravelTicketsController@viewStampingApprove')->name('viewStampingApprove');
        Route::get('/booked', 'TravelTicketsController@booked')->name('booked');
    });
});
