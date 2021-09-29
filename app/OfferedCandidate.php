<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfferedCandidate extends Model
{
    protected $fillable = [

        'id',
        'candidate_id',
        'job_category_id',
        'job_post_id',
        'candidate_user_id',
        'created_id',
        'interview_osc_id',
        'selected_osc_id',
        'post_medical_id',
        'post_training_id',
        'travel_agency_id',
        'welfare_center_id',
        'candidate_name',
        'phone_number',
        'phone_number',
        'candidate_email',
        'candidate_password',
        'result_status',
        'employer_comments',
        'offer_letter',
        'payment_assigned',
        'payment_method',
        'interview_result',
        'biometric_fee',
        'bio_status',
        'post_medical_status',
        'post_training_status',
        'bio_report',
        'post_medical_report',
        'post_training_report',
        'medical_fee',
        'training_fee',
        'post_medical_comments',
        'post_training_comments',
        'visa_document',
        'visa_reason',
        'travel_status',
        'date_of_journey',
        'flight_number',
        'ticket_cost',
        'ticket_pdf',
        'activated_at'
    ];

    public function selectedOSC()
    {
        return $this->belongsTo(User::class, 'selected_osc_id');
    }

    public function travelAgency()
    {
        return $this->belongsTo(User::class, 'travel_agency_id');
    }

    public function selectedWSC()
    {
        return $this->belongsTo(User::class, 'welfare_center_id');
    }

    public function candidate()
    {
        return $this->belongsTo(Candidate::class, 'candidate_id');
    }

    public function createdUser()
    {
        return $this->belongsTo(User::class, 'created_id');
    }

    public function jobPost()
    {
        return $this->belongsTo(JobPost::class);
    }

    public function job_category()
    {
        return $this->belongsTo(JobCategory::class, 'job_category_id');
    }
}
