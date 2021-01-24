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
        return Schedule::whereDate('start_time','2021-01-29')->get();
    }
}
