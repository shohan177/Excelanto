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
}
