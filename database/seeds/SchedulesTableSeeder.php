<?php

use Illuminate\Database\Seeder;
use App\Schedule;

class SchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schedules = array(
            array('id' => '1','day_number' => '1','start_time' => '2021-01-29 15:00:00','title' => 'Opening Ceremony','subtitle' => NULL,'speaker_id' => '1','created_at' => '2020-10-24 06:10:50','updated_at' => '2020-10-24 06:10:50','deleted_at' => NULL),
            array('id' => '2','day_number' => '1','start_time' => '2021-01-29 15:15:00','title' => 'POSITIVE or NEGATIVE?','subtitle' => 'Differentiating Rapid Antibody Test/Antigen/RT PCR','speaker_id' => '1','meeting_id' => 'lecture-1-1-POSITIVE-or-NEGATIVE','created_at' => '2020-10-24 06:10:50','updated_at' => '2020-10-24 06:10:50','deleted_at' => NULL),
            array('id' => '3','day_number' => '1','start_time' => '2021-01-29 16:05:00','title' => 'UPLOAD or DOWNLOAD','subtitle' => 'Benefits of Vitamins and Immune Boosters during the CoVid Time','speaker_id' => '1','meeting_id' => 'lecture-1-2-UPLOAD-or-DOWNLOAD','created_at' => '2020-10-24 06:10:50','updated_at' => '2020-10-24 06:10:50','deleted_at' => NULL),
            array('id' => '4','day_number' => '1','start_time' => '2021-01-29 16:55:00','title' => 'CARE or SCARE?','subtitle' => 'Update on CoVid Vaccine','speaker_id' => '1','meeting_id' => 'lecture-1-3-CARE-or-SCARE','created_at' => '2020-10-24 06:10:50','updated_at' => '2020-10-24 06:10:50','deleted_at' => NULL),
            array('id' => '5','day_number' => '1','start_time' => '2021-01-29 17:45:00','title' => 'WHAT IS NEW WITH COVID 19?','subtitle' => 'Update on the Guidelines in the Management of CoVid - remdesivir','speaker_id' => '1','meeting_id' => 'lecture-1-4-WHAT-IS-NEW-WITH-COVID 19','created_at' => '2020-10-24 06:10:50','updated_at' => '2020-10-24 06:10:50','deleted_at' => NULL),
            array('id' => '6','day_number' => '1','start_time' => '2021-01-29 18:55:00','title' => 'Closing and Raffle','subtitle' => NULL,'speaker_id' => '3','meeting_id' => 'day-1-PCP-CLOSING-AND-RAFFLE-2020','created_at' => '2020-10-24 06:10:50','updated_at' => '2020-10-24 06:10:50','deleted_at' => NULL),
            array('id' => '7','day_number' => '2','start_time' => '2021-01-30 15:00:00','title' => 'Opening Ceremony','subtitle' => NULL,'speaker_id' => '1','meeting_id' => 'day-2-PCP-OPENING-CEREMONY-2020','created_at' => '2020-10-24 06:10:50','updated_at' => '2020-10-24 06:10:50','deleted_at' => NULL),
            array('id' => '8','day_number' => '2','start_time' => '2021-01-30 15:15:00','title' => 'OK or NOT OK?','subtitle' => 'Mental Health Coping Mechanisms','speaker_id' => '1','meeting_id' => 'lecture-2-1-OK-OR-NOT-OK','created_at' => '2020-10-24 06:10:50','updated_at' => '2020-10-24 06:10:50','deleted_at' => NULL),
            array('id' => '9','day_number' => '2','start_time' => '2021-01-30 16:05:00','title' => 'I\'VE LIVED WITH THE ENEMY','subtitle' => 'Post CoVid Experience','speaker_id' => '1','meeting_id' => 'lecture-2-2-I-VE-LIVED-WITH-THE-ENEMY','created_at' => '2020-10-24 06:10:50','updated_at' => '2020-10-24 06:10:50','deleted_at' => NULL),
            array('id' => '10','day_number' => '2','start_time' => '2021-01-30 16:55:00','title' => 'ONLINE or OFFLINE?','subtitle' => 'Telemedicine','speaker_id' => '1','meeting_id' => 'lecture-2-3-ONLINE-OR-OFFLINE','created_at' => '2020-10-24 06:10:50','updated_at' => '2020-10-24 06:10:50','deleted_at' => NULL),
            array('id' => '11','day_number' => '2','start_time' => '2021-01-30 17:45:00','title' => 'PRACTICAL BENEFITS OF HEMOPERFUSION','subtitle' => 'Hemoperfusion','speaker_id' => '1','meeting_id' => 'lecture-2-4-PRACTICAL-BENEFITS-OF-HEMOPERFUSION','created_at' => '2020-10-24 06:10:50','updated_at' => '2020-10-24 06:10:50','deleted_at' => NULL),
            array('id' => '12','day_number' => '2','start_time' => '2021-01-30 19:15:00','title' => 'Closing and Raffle','subtitle' => NULL,'speaker_id' => '3','meeting_id' => 'day-2-PCP-CLOSING-AND-RAFFLE-2020','created_at' => '2020-10-24 06:10:50','updated_at' => '2020-10-24 06:10:50','deleted_at' => NULL)
          );
        foreach($schedules as $schedule)
        {
            Schedule::create($schedule);
        }
    }
}
