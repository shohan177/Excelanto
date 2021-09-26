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
        Route::get('/approved', 'QuotationsController@approved')->name('approved');
    });


    // Travel Tickets
    Route::get('/travel_required', 'TravelTicketsController@travel_required')->name('travel_required');
    Route::get('/travel_booked', 'TravelTicketsController@travel_booked')->name('travel_booked');
});
