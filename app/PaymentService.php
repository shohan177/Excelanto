<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentService extends Model
{
    protected $fillable = [
        'id',
        'candidate_id',
        'company_id',
        'wsc_id',
        'salary_type',
        'cpr',
        'comments',
        'payment_application',
        'service_status',
        'penalty_pdf',
        'fees',
        'delivery_charge',
        'delivery_type',
        'delivery_to',
        'delivery_status',
        'created_id',
        'deleted'
    ];
}
