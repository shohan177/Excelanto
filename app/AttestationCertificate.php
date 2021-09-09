<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttestationCertificate extends Model
{
    protected $fillable = [
        'id',
        'candidate_id',
        'company_id',
        'wsc_id',
        'service_type',
        'comments',
        'service_status',
        'created_id',
        'deleted',
        'fees',
        'delivery_charge',
        'delivery_type',
        'delivery_to',
        'document',
        'legal_status',
        'delivery_status'
    ];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class, 'candidate_id');
    }
}
