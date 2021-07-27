<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivatedCandidate extends Model
{
    protected $fillable = [
        'id',
        'candidate_id',
        'present_city',
        'status',
        'active_status',
        'welfare_center_name',
        'company_name',
        'visa_pdf',
        'created_by',
        'created_id',
        'created_at'

    ];

    public function candidate()
    {
        return $this->hasOne(Candidate::class, 'candidate_id');
    }
}
