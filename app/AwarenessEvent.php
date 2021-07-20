<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AwarenessEvent extends Model
{
    protected $fillable = [
        'id',
        'event_category_id',
        'event_agenda',
        'conducted_by',
        'event_date',
        'event_time',
        'place',
        'event_description',
        'created_at',
        // 'created_id',
        'event_status',
        'deleted',
    ];

    public function eventCategory(){
        return $this->belongsTo(EventCategory::class);
    }
}
