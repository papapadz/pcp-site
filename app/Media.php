<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Media extends Model
{
    use SoftDeletes;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'schedule_id',
        'type',
        'views',
        'url'
    ];

    public function shedule() {
        return $this->belongsTo(Schedule::class,'id','schedule_id');
    }

    public function event() {
        return $this->hasOne(Schedule::class,'id','schedule_id');
    }
}
