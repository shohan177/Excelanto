<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $fillable = [
        'id',
        'role_id',
        'job_category_id',
        'job_id',
        'company_id',
        'candidate_name',
        'candidate_dob',
        'candidate_gender',
        'passport_number',
        'phone_number',
        'candidate_email',
        'country',
        'nationality',
        'present_address',
        'permanent_address',
        'active_status',
        'candidate_picture',
        'candidate_resume',
        'pre_medical_certificate',
        'pre_traning_certificate',
        'created_by',
        'created_id',
        'updated_by',
        'updated_id',
        'pre_medical_id',
        'pre_training_id',
        'pre_medical_status',
        'pre_training_status',
        'pre_updated_dt',
        'approval_status',
        'pre_medical_report',
        'pre_training_report',
        'pre_medical_dt',
        'pre_training_dt',
        'pre_medical_comments',
        'pre_training_comments',
        'status'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function job_category()
    {
        return $this->belongsTo(JobCategory::class, 'job_category_id');
    }
    public function offered_candidate()
    {
        return $this->hasOne(OfferedCandidate::class, 'candidate_id');
    }
    public function lost_passport_service()
    {
        return $this->hasOne(LostPassportService::class, 'candidate_id');
    }
    public function change_visa_service()
    {
        return $this->hasOne(ChangeVisaService::class, 'candidate_id');
    }
    public function charity_service()
    {
        return $this->hasOne(CharityService::class, 'candidate_id');
    }
}
