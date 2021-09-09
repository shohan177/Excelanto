<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MeetAndGreet extends Model
{
    protected $fillable = [
        'id',
        'candidate_id',
        'company_id',
        'wsc_id',
        'guest_name',
        'number_of_guests',
        'service_name',
        'arrival_date',
        'airline_name',
        'flight_number',
        'flight_time',
        'transport_service',
        'passport_copy',
        'comments',
        'active_status',
        'created_by',
        'deleted'
    ];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class, 'candidate_id');
    }
}
