<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // UsersTableSeeder::class,
            // MembersTableSeeder::class,
            // SettingSeeder::class,
            //SchedulesTableSeeder::class,
            // SpeakersTableSeeder::class,
            MediaTableSeeder::class
        ]);
    }
}
