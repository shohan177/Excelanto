<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JailAndDeportation extends Model
{
    protected $fillable = [
        'id',
        'candidate_id',
        'company_id',
        'wsc_id',
        'job_category_id',
        'person_name',
        'person_relation',
        'passport_number',
        'passport_expirydate',
        'visa_number',
        'visa_expirydate',
        'cause_of_arrest',
        'police_station_name',
        'arrest_date',
        'passport_copy',
        'comments',
        'created_id',
        'active_status',
        'deleted'
    ];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class, 'candidate_id');
    }
}
