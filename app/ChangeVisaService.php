<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChangeVisaService extends Model
{
    protected $fillable = [
        'id',
        'candidate_id',
        'company_id',
        'wsc_id',
        'cpr',
        'service_type',
        'fees',
        'delivery_type',
        'delivery_charge',
        'document',
        'delivery_to',
        'delivery_status',
        'comments',
        'service_status',
        'created_id',
        'deleted'
    ];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class, 'candidate_id');
    }
}
