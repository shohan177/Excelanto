<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'user_name',
        'company_name',
        'company_email',
        'status'
    ];
}
