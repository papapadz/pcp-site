<?php

namespace App\Http\Controllers;
use App\Setting;
use App\Speaker;
use App\Schedule;
use App\Media;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {   
        $settings = Setting::pluck('value', 'key');
        $speakers = Speaker::all();
        $schedules = Schedule::with('speaker')
            ->orderBy('start_time', 'asc')
            ->get()
            ->groupBy('day_number');

        return view('home',compact(
            'settings','speakers','schedules'
        ));
    }

    public function meeting($id) {

        $media = Media::find($id);

        return view('meeting')->with('media',$media);
    }
}
