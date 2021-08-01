<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdrService extends Model
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
}
