<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['country_code', 'country_name', 'status' ];

    
    public function users(){
        return $this->hasMany(User::class, 'country_id');
    }
}
