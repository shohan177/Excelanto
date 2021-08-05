<?php

use Illuminate\Support\Facades\Route;

  // TravelAgency
Route::group(['prefix' => 'travel-agency/', 'namespace' => 'TravelAgency', 'as' => 'TravelAgency.', 'middleware' => ['auth', 'travel-agency']], function () {
    Route::get('/dashboard', 'TravelAgencyDashboardController@dashboard')->name('dashboard');
    Route::get('/company-profile-view', 'TravelAgencyDashboardController@companyPrfileView')->name('companyPrfileView');
    Route::post('/company-profile-submit', 'TravelAgencyDashboardController@companyPrfileSubmit')->name('companyPrfileSubmit');

    //Enquiries
    Route::get('/new_enquiries', 'EnquiriesController@new_enquiries')->name('new_enquiries');
    Route::get('/expired_enquiries', 'EnquiriesController@expired_enquiries')->name('expired_enquiries');

    // Quotations
    Route::get('/submitted_quotations', 'QuotationsController@submitted_quotations')->name('submitted_quotations');
    Route::get('/approved_quotations', 'QuotationsController@approved_quotations')->name('approved_quotations');

    // Travel Tickets
    Route::get('/travel_required', 'TravelTicketsController@travel_required')->name('travel_required');
    Route::get('/travel_booked', 'TravelTicketsController@travel_booked')->name('travel_booked');
});
