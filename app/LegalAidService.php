<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LegalAidService extends Model
{
    protected $fillable = [
        'id',
        'candidate_id',
        'company_id',
        'wsc_id',
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
