<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeadbodyTransfer extends Model
{
    protected $fillable = [
        'id',
        'wsc_id',
        'candidate_name',
        'company_name',
        'deadbody_name',
        'lelation',
        'passport_copy',
        'passport_number',
        'passport_expirydate',
        'visa_number',
        'visa_expirydate',
        'cause_of_death',
        'bangladesh_address',
        'relative_name',
        'contact_number',
        'comments',
        'active_status',
        'created_id',
        'deleted'
    ];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class, 'created_id');
    }
}
