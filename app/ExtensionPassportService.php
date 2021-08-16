<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExtensionPassportService extends Model
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
        'extention_passport',
        'service_status',
        'passport',
        'fees',
        'delivery_type',
        'delivery_to',
        'delivery_status',
        'reject_reason',
        'b_embassy_id',
        'created_id',
        'deleted'
    ];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class, 'candidate_id');
    }
}
