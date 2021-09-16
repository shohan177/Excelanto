<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChangeEmployerService extends Model
{
    protected $fillable = [
        'id',
        'candidate_id',
        'company_id',
        'wsc_id',
        'cpr',
        'new_offer_letter',
        'comments',
        'service_status',
        'delivery_type',
        'fees',
        'delivery_charge',
        'delivery_to',
        'delivery_status',
        'document',
        'created_id',
        'deleted'
    ];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class, 'candidate_id');
    }
    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
}
