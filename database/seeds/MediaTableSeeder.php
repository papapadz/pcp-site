<?php

use Illuminate\Database\Seeder;
use App\Media;

class MediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $media = [
            //OPENING DAY 1
            [
                'schedule_id' => 1,
                'type' => 1,
                'url' => 'https://player.vimeo.com/video/472090173',
            ],
            // LECTURE 1
            [
                'schedule_id' => 2,
                'type' => 1,
                'url' => 'https://player.vimeo.com/video/472090173'
            ],
            [
                'schedule_id' => 2,
                'type' => 2,
                'url' => 'https://meet.jit.si/day-1-Q&A-POSITIVE-or-NEGATIVE'
            ],
            [
                'schedule_id' => 2,
                'type' => 3,
                'url' => 'https://player.vimeo.com/video/472090173'
            ],
            // LECTURE 2
            [
                'schedule_id' => 3,
                'type' => 1,
                'url' => 'https://player.vimeo.com/video/472090173'
            ],
            [
                'schedule_id' => 3,
                'type' => 2,
                'url' => 'https://meet.jit.si/day-1-Q&A-UPLOAD-or-DOWNLOAD'
            ],
            [
                'schedule_id' => 3,
                'type' => 3,
                'url' => 'https://player.vimeo.com/video/472090173'
            ],
            //LECTURE 3
            [
                'schedule_id' => 4,
                'type' => 1,
                'url' => 'https://player.vimeo.com/video/472090173'
            ],
            [
                'schedule_id' => 4,
                'type' => 2,
                'url' => 'https://meet.jit.si/day-1-Q&A-CARE-or-SCARE'
            ],
            [
                'schedule_id' => 4,
                'type' => 3,
                'url' => 'https://player.vimeo.com/video/472090173'
            ],
            //LECTURE 4
            [
                'schedule_id' => 5,
                'type' => 1,
                'url' => 'https://player.vimeo.com/video/472090173'
            ],
            [
                'schedule_id' => 5,
                'type' => 2,
                'url' => 'https://meet.jit.si/day-1-Q&A-WHAT-IS-NEW-IN-COVID-19'
            ],            
            [
                'schedule_id' => 5,
                'type' => 3,
                'url' => 'https://player.vimeo.com/video/472090173'
            ],
            //CLOSING 
            [
                'schedule_id' => 6,
                'type' => 1,
                'url' => 'https://meet.jit.si/day-1-CLOSING-AND-RAFFLE'
            ], 
            //OPENING DAY 2
            [
                'schedule_id' => 7,
                'type' => 1,
                'url' => 'https://player.vimeo.com/video/472090173',
            ],
            //LECTURE 5
            [
                'schedule_id' => 8,
                'type' => 1,
                'url' => 'https://player.vimeo.com/video/472090173',
            ],
            [
                'schedule_id' => 8,
                'type' => 2,
                'url' => 'https://meet.jit.si/day-2-Q&A-OK-OR-NOT-OK'
            ],
            [
                'schedule_id' => 8,
                'type' => 3,
                'url' => 'https://player.vimeo.com/video/472090173',
            ],
            //LECTURE 6
            [
                'schedule_id' => 9,
                'type' => 1,
                'url' => 'https://player.vimeo.com/video/472090173',
            ],
            [
                'schedule_id' => 9,
                'type' => 2,
                'url' => 'https://meet.jit.si/lecture-2-2-I-VE-LIVED-WITH-THE-ENEMY'
            ],
            [
                'schedule_id' => 9,
                'type' => 3,
                'url' => 'https://player.vimeo.com/video/472090173',
            ],
            //LECTURE 7
            [
                'schedule_id' => 10,
                'type' => 1,
                'url' => 'https://player.vimeo.com/video/472090173',
            ],
            [
                'schedule_id' => 10,
                'type' => 2,
                'url' => 'https://meet.jit.si/lecture-2-3-ONLINE-OR-OFFLINE'
            ],
            [
                'schedule_id' => 10,
                'type' => 3,
                'url' => 'https://player.vimeo.com/video/472090173',
            ],
            //LECTURE 8
            [
                'schedule_id' => 11,
                'type' => 1,
                'url' => 'https://player.vimeo.com/video/472090173',
            ],
            [
                'schedule_id' => 11,
                'type' => 2,
                'url' => 'https://meet.jit.si/lecture-2-4-PRACTICAL-BENEFITS-OF-HEMOPERFUSION'
            ],
            [
                'schedule_id' => 11,
                'type' => 3,
                'url' => 'https://player.vimeo.com/video/472090173',
            ],
            //CLOSING
            [
                'schedule_id' => 12,
                'type' => 1,
                'url' => 'https://meet.jit.si/day-2-PCP-CLOSING-AND-RAFFLE-2020'
            ],  
        ];
        foreach($media as $m)
        {
            Media::create($m);
        }
    }
}
