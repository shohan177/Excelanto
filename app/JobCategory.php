<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
    protected $fillable = [
        'category_name','status'
    ];

    public function jobPosts(){
        return $this->hasMany(JobPost::class, 'job_category_id');
    }
}
