<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
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
}
