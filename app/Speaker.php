<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Speaker extends Model
{
    use SoftDeletes;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'member_id',
        'name',
        'twitter',
        'facebook',
        'linkedin',
        'created_at',
        'updated_at',
        'deleted_at',
        'description',
        'full_description',
    ];

    public function schedules()
    {
        return $this->hasMany(Schedule::class, 'speaker_id', 'id');
    }

    public function schedule()
    {
        return $this->hasOne(Schedule::class, 'speaker_id', 'id')->with('media');
    }
}
