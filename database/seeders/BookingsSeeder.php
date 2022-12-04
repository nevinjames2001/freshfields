<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BookingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookings')->insert([
            'veterinarian_id' => '1',
            'name'=>'Seo James',
            'email'=>'seojames@gmail.com',
            'date'=>'2022-12-26',
            'phone'=>'1234567890',
            'reason'=>'Check for cattles',
            'timeslot'=>'10:00AM-11:00AM'
        ]);
        DB::table('bookings')->insert([
            'veterinarian_id' => '2',
            'name'=>'Seo James',
            'email'=>'seojames@gmail.com',
            'date'=>'2022-12-26',
            'phone'=>'1234567890',
            'reason'=>'Check for cattles',
            'timeslot'=>'10:00AM-11:00AM'
        ]);
        DB::table('bookings')->insert([
            'veterinarian_id' => '3',
            'name'=>'Seo James',
            'email'=>'seojames@gmail.com',
            'date'=>'2022-12-26',
            'phone'=>'1234567890',
            'reason'=>'Check for cattles',
            'timeslot'=>'10:00AM-11:00AM'
        ]);
        DB::table('bookings')->insert([
            'veterinarian_id' => '4',
            'name'=>'Seo James',
            'email'=>'seojames@gmail.com',
            'date'=>'2022-12-26',
            'phone'=>'1234567890',
            'reason'=>'Check for cattles',
            'timeslot'=>'10:00AM-11:00AM'
        ]);


    }
}
