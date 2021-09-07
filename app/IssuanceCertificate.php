<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IssuanceCertificate extends Model
{
    protected $fillable = [
        'id',
        'candidate_id',
        'company_id',
        'wsc_id',
        'service_type',
        'comments',
        'service_status',
        'delivery_status',
        'delivery_charge',
        'fees',
        'delivery_to',
        'document',
        'delivery_type',
        'created_id',
        'deleted'
    ];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class, 'candidate_id');
    }
}
