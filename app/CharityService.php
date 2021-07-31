<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CharityService extends Model
{
    protected $fillable = [
        'id',
        'candidate_id',
        'company_id',
        'wsc_id',
        'candidate_name',
        'company_name',
        'service_type',
        'comments',
        'service_status',
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
