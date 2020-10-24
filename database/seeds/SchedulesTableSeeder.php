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
        $schedules = [
            [
                'day_number' => 1,
                'start_time' => '09:30:00',
                'title' => 'Registration',
                'subtitle' => 'Fugit voluptas iusto maiores temporibus autem numquam magnam.',
                'speaker_id' => 1,
            ],
            [
                'day_number' => 1,
                'start_time' => '10:00:00',
                'title' => 'Keynote',
                'subtitle' => 'Facere provident incidunt quos voluptas.',
                'speaker_id' => 1,
            ],
            [
                'day_number' => 2,
                'start_time' => '11:00:00',
                'title' => 'Et voluptatem iusto dicta nobis.',
                'subtitle' => 'Maiores dignissimos neque qui cum accusantium ut sit sint inventore.',
                'speaker_id' => 2,
            ],
            [
                'day_number' => 2,
                'start_time' => '12:00:00',
                'title' => 'Explicabo et rerum quis et ut ea.',
                'subtitle' => 'Veniam accusantium laborum nihil eos eaque accusantium aspernatur.',
                'speaker_id' => 3,
            ],
        ];
        foreach($schedules as $schedule)
        {
            Schedule::create($schedule);
        }
    }
}
