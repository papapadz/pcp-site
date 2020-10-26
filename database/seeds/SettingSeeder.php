<?php

use Illuminate\Database\Seeder;
use App\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = array(
            array('id' => '1','key' => 'title','value' => 'The Annual<br><span>Marketing</span> Conference','created_at' => '2020-10-24 05:19:45','updated_at' => '2020-10-24 05:19:45','deleted_at' => NULL),
            array('id' => '2','key' => 'subtitle','value' => '10-12 December, Downtown Conference Center, New York','created_at' => '2020-10-24 05:19:45','updated_at' => '2020-10-24 05:19:45','deleted_at' => NULL),
            array('id' => '3','key' => 'youtube_link','value' => 'https://www.youtube.com/watch?v=jDDaplaOz7Q','created_at' => '2020-10-24 05:19:45','updated_at' => '2020-10-24 05:19:45','deleted_at' => NULL),
            array('id' => '4','key' => 'about_description','value' => 'PCP-IAC 1st Virtual Post Graduate Course with the Theme: "Living with the Enemy"','created_at' => '2020-10-24 05:19:45','updated_at' => '2020-10-24 05:19:45','deleted_at' => NULL),
            array('id' => '5','key' => 'about_where','value' => 'Ilocos Norte','created_at' => '2020-10-24 05:19:45','updated_at' => '2020-10-24 05:19:45','deleted_at' => NULL),
            array('id' => '6','key' => 'about_when','value' => 'January 29 to 30, 2021','created_at' => '2020-10-24 05:19:45','updated_at' => '2020-10-24 05:19:45','deleted_at' => NULL),
            array('id' => '7','key' => 'contact_address','value' => 'A108 Adam Street, NY 535022, USA','created_at' => '2020-10-24 05:19:45','updated_at' => '2020-10-24 05:19:45','deleted_at' => NULL),
            array('id' => '8','key' => 'contact_phone','value' => '+1 5589 55488 55','created_at' => '2020-10-24 05:19:45','updated_at' => '2020-10-24 05:19:45','deleted_at' => NULL),
            array('id' => '9','key' => 'contact_email','value' => 'info@example.com','created_at' => '2020-10-24 05:19:45','updated_at' => '2020-10-24 05:19:45','deleted_at' => NULL),
            array('id' => '10','key' => 'footer_description','value' => 'In alias aperiam. Placeat tempore facere. Officiis voluptate ipsam vel eveniet est dolor et totam porro. Perspiciatis ad omnis fugit molestiae recusandae possimus. Aut consectetur id quis. In inventore consequatur ad voluptate cupiditate debitis accusamus repellat cumque.','created_at' => '2020-10-24 05:19:45','updated_at' => '2020-10-24 05:19:45','deleted_at' => NULL),
            array('id' => '11','key' => 'footer_address','value' => 'A108 Adam Street <br> New York, NY 535022<br> United States ','created_at' => '2020-10-24 05:19:45','updated_at' => '2020-10-24 05:19:45','deleted_at' => NULL),
            array('id' => '12','key' => 'footer_twitter','value' => '#','created_at' => '2020-10-24 05:19:45','updated_at' => '2020-10-24 05:19:45','deleted_at' => NULL),
            array('id' => '13','key' => 'footer_facebook','value' => '#','created_at' => '2020-10-24 05:19:45','updated_at' => '2020-10-24 05:19:45','deleted_at' => NULL),
            array('id' => '14','key' => 'footer_instagram','value' => '#','created_at' => '2020-10-24 05:19:45','updated_at' => '2020-10-24 05:19:45','deleted_at' => NULL),
            array('id' => '15','key' => 'footer_googleplus','value' => '#','created_at' => '2020-10-24 05:19:45','updated_at' => '2020-10-24 05:19:45','deleted_at' => NULL),
            array('id' => '16','key' => 'footer_linkedin','value' => '#','created_at' => '2020-10-24 05:19:45','updated_at' => '2020-10-24 05:19:45','deleted_at' => NULL)
          );

        foreach($settings as $setting)
        {
            Setting::create($setting);
        }
    }
}
