<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Auth;
use App\Setting;
use App\Speaker;
use App\Schedule;
use App\Media;
use App\User;
use App\View;
use App\Sponsor;

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
        $sponsors = Sponsor::all();

        $user_pending = User::where('email_verified_at',null)->count();

        return view('home',compact(
            'settings','speakers','schedules','user_pending','sponsors'
        ));
    }

    public function event($id) {
        
        $schedule = Schedule::find($id);
        $event_time = Carbon::parse($schedule->start_time);
        if(Carbon::now()->gte($event_time)) {
            $settings = Setting::pluck('value', 'key');
            $user_pending = User::where('email_verified_at',null)->count();
            $next = Schedule::select('id','title','start_time')->where([['start_time','>',$event_time->toDateTimeString()],['day_number',$schedule->day_number]])->first();
            $counter = Carbon::now()->diffInSeconds($next->start_time);

            return view('event', compact('settings','schedule','user_pending','next','counter'));
        }
        return redirect()->route('home');
    }

    public function meeting($id) {

        $settings = Setting::pluck('value', 'key');
        $media = Media::find($id);
        $schedule = Media::where('schedule_id',$media->schedule_id)->get();
        $user_pending = User::where('email_verified_at',null)->count();
        $mins = $media->mins;
        
        if($media->type != 2)
            View::create([
                'member_id' => Auth::user()->member_id, 'media_id' => $media->id, 'media_table' => 'main'
            ]);

        $next = $next_url = $next_title = null;
        if(count($schedule)==1 || $media->type == 3) {
            $next = Schedule::select('id','title')->where([['start_time','>',Carbon::parse($media->event->start_time)->toDateTimeString()],['day_number',$media->event->day_number]])->first();
            $next_url = url('event/'.$next->id);
            $next_title = $next->title;
        } else {
            $type = $media->type + 1;
            $next = $schedule->where('type',$type)->first();
            $next_url = url('meeting/'.$next->id);
            if($type==2)
                $next_title = 'Question and Answer';
            else
                $next_title = 'Product Presentation';   
        }
        
        $counter = Carbon::now()->diffInMilliseconds($next->start_time);

        return view('meeting', compact('media','settings','user_pending','mins','next_url','next_title','counter'));
    }

    public function sponsor($id) {
        
        $sponsor = Sponsor::find($id);
        
        View::create([
            'member_id' => Auth::user()->member_id, 'media_id' => $sponsor->id, 'media_table' => 'avp'
        ]);
        
        $user_pending = User::where('email_verified_at',null)->count();
        $settings = Setting::pluck('value', 'key');
        
        return view('sponsor-avp',compact('settings','user_pending','sponsor'));
    }
}
