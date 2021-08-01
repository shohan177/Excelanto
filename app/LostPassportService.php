<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LostPassportService extends Model
{
    protected $fillable = [
        'id',
        'candidate_id',
        'company_id',
        'wsc_id',
        'b_embassy_id',
        'cpr',
        'bhr_mobile_no',
        'bangladesh_mobile',
        'bangladesh_address',
        'spouse_cpr',
        'spouse_mobile',
        'salary',
        'comments',
        'service_status',
        'delivery_type',
        'delivery_to',
        'delivery_status',
        'passport',
        'fees',
        'reject_reason',
        'created_id',
        'deleted'
    ];


    public function candidate()
    {
        return $this->belongsTo(Candidate::class, 'candidate_id');
    }
}
