<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppliedJob extends Model
{
    protected $fillable = [
        'id',
        'job_post_id',
        'company_id',
        'applier_id',
        'selected_medical_id',
        'selected_training_id',
        'job_vacancy',
        'applied_vacancy',
        'remarks',
        'applier_agency_name',
        'datetime',
        'status',
        'approved_by',
        'approved_vacancy',
        'approved_date',
        'approved_company_name',
        'approved_id',
        'approved_remarks'
    ];

    public function jobPost()
    {
        return $this->hasOne(JobPost::class, 'id');
    }

    public function company()
    {
        return $this->hasOne(company::class, 'company_id');
    }

}
