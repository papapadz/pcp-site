<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    protected $fillable = [
        'member_id', 'media_id','media_table'
    ];

    public function meetings() {
        return $this->hasMany(Media::class,'id','media_id')->where('media_table','main');
    }

    public function avp() {
        return $this->hasMany(Sponsor::class,'id','media_id')->where('media_table','avp');
    }
}
