<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TravelEnquiry extends Model
{
    protected $fillable = [
        'id',
        'oss_id',
        'start_point',
        'end_point',
        'tickets_required',
        'date_of_journey',
        'end_date',
        'oss_comments',
        'enquiry_status',
        'created_date',
        'deleted'
    ];
}
