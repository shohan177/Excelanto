<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventCategory extends Model
{
    protected $fillable = [
        'category_name','status'
    ];

    public function awarenssEvents(){
        return $this->hasMany(AwarenessEvent::class, 'event_category_id');
    }
}
