<?php

use Illuminate\Support\Facades\Route;

// TravelAgency
Route::group(['prefix' => 'travel-agency/', 'namespace' => 'TravelAgency', 'as' => 'TravelAgency.', 'middleware' => ['auth', 'travel-agency']], function () {
    Route::get('/dashboard', 'TravelAgencyDashboardController@dashboard')->name('dashboard');
    Route::get('/company-profile-view', 'TravelAgencyDashboardController@companyPrfileView')->name('companyPrfileView');
    Route::post('/company-profile-submit', 'TravelAgencyDashboardController@companyPrfileSubmit')->name('companyPrfileSubmit');

    // Enquiries
    Route::group(['prefix' => 'enquiries/', 'as' => 'enquiries.'], function () {
        Route::get('/new', 'EnquiriesController@new')->name('new');
        Route::get('/expired', 'EnquiriesController@expired')->name('expired');
        Route::get('/view/{id}', 'EnquiriesController@view')->name('view');
        Route::get('/apply/{id}', 'EnquiriesController@apply')->name('apply');
        Route::get('/apply-store/{id}', 'EnquiriesController@applyStore')->name('applyStore');
    });

    // Quotations
    Route::get('/submitted_quotations', 'QuotationsController@submitted_quotations')->name('submitted_quotations');
    Route::get('/approved_quotations', 'QuotationsController@approved_quotations')->name('approved_quotations');

    // Travel Tickets
    Route::get('/travel_required', 'TravelTicketsController@travel_required')->name('travel_required');
    Route::get('/travel_booked', 'TravelTicketsController@travel_booked')->name('travel_booked');
});
