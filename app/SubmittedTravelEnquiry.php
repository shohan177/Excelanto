<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubmittedTravelEnquiry extends Model
{

    protected $fillable = [
        'enquiry_id',
        'journey_date',
        'total_tickets',
        'submitted_cost',
        'travel_agency_comments',
        'travel_agency_id',
        'submitted_date',
        'submitted_status'
    ];

    public function travelEnquiry()
    {
        return $this->belongsTo(TravelEnquiry::class, 'enquiry_id');
    }
    public function travelAgency()
    {
        return $this->belongsTo(User::class, 'travel_agency_id');
    }
}
