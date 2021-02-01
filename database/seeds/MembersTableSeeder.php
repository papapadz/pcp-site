<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'member_id' => '123456789',
            'first_name' => 'Admin',
            'middle_name' => 'Admin',
            'last_name' => 'Admin',
            'mobile_number' => '099999999',
            'prc' => '0123456',
            'category' => 'Life Member',
            'status' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
