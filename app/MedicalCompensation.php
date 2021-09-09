<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalCompensation extends Model
{
    protected $fillable = [
        'id',
        'candidate_id',
        'company_id',
        'wsc_id',
        'candidate_name',
        'company_name',
        'sick_type',
        'doctor_name',
        'hospital_name',
        'prescription',
        'insurance_number',
        'insurance_card',
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
