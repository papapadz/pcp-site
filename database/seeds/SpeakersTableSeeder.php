<?php

use Illuminate\Database\Seeder;
use App\Speaker;

class SpeakersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $speakers = [
            [
                'name'              => 'Brenden Legros',
                'description'       => 'Quas alias incidunt',
                'twitter'           => '#',
                'facebook'          => '#',
                'linkedin'          => '#',
                'full_description'  => $faker->paragraph
            ],
            [
                'name'              => 'Hubert Hirthe',
                'description'       => 'Consequuntur odio aut',
                'twitter'           => '#',
                'facebook'          => '#',
                'linkedin'          => '#',
                'full_description'  => $faker->paragraph
            ],
            [
                'name'              => 'Cole Emmerich',
                'description'       => 'Fugiat laborum et',
                'twitter'           => '#',
                'facebook'          => '#',
                'linkedin'          => '#',
                'full_description'  => $faker->paragraph
            ],
        ];
        foreach($speakers as $speaker) {
            $speaker = Speaker::create($speaker);
        }
    }
}
