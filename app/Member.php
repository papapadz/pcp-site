<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $primaryKey = 'member_id';
    protected $casts = [
        'member_id' => 'string',
    ];
    protected $fillable = [
        'member_id',
        'first_name',
        'middle_name',
        'last_name',
        'mobile_number',
        'prc',
        'category',
        'status',
        'remarks'
    ];

    public function user() {
        return $this->belongsTo(User::class,'member_id');
    }

    public function views() {
        return $this->hasMany(View::class,'member_id');
    }
}
