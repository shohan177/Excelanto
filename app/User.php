<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id','country_id','name','email','password','user_type','active_status','quata','company_regno','domain','company_name','abbr','mobile','city','state','address1','address2','document1','document2','status','childosc_id','cosc_assigned_status','remember_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function company(){
        return $this->hasOne(Company::class);
    }

    public function submittedTravelEnquiry()
    {
        return $this->hasOne(User::class, 'travel_agency_id');
    }

    public function country(){
        return $this->belongsTo(Country::class ,'country_id');
    }
}
