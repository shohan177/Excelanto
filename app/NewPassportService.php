<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewPassportService extends Model
{
    protected $fillable = [
        'id',
        'candidate_id',
        'company_id',
        'wsc_id',
        'candidate_name',
        'company_name',
        'salary_type',
        'cpr',
        'comments',
        'new_offer_application',
        'service_status',
        'photo',
        'biometric',
        'fees',
        'delivery_type',
        'delivery_to',
        'delivery_status',
        'new_passport',
        'reject_reason',
        'created_id',
        'deleted'
    ];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class, 'candidate_id');
    }
}
