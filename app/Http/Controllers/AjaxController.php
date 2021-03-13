<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Speaker;
use App\Schedule;
use App\Media;
use App\User;
use Carbon\Carbon as Carbon;

class AjaxController extends Controller
{
    public function geteventstoday() {
        return Schedule::where('start_time','>=',Carbon::now()->toDateTimeString())->get();
        //return Schedule::get();
    }
}
