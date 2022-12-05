<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Fresh Fields',
            'email'=>'freshfields@gmail.com',
            'is_admin'=>'1',
            'is_user'=>'0',
            'is_doctor'=>'0',
            'password'=>Hash::make('ShillySeba@2021'),
        ]);
        DB::table('users')->insert([
            'name' => 'John Smith',
            'email'=>'johnsmith@gmail.com',
            'is_admin'=>'0',
            'is_user'=>'0',
            'is_doctor'=>'1',
            'veterinarian_id'=>'1',
            'password'=>Hash::make('asdfghjkl'),
        ]);
        DB::table('users')->insert([
            'name' => 'Brick Wall',
            'email'=>'brickwall@gmail.com',
            'is_admin'=>'0',
            'is_user'=>'0',
            'is_doctor'=>'1',
            'veterinarian_id'=>'2',
            'password'=>Hash::make('asdfghjkl'),
        ]);
        DB::table('users')->insert([
            'name' => 'George A Beller',
            'email'=>'georgeabeller@gmail.com',
            'is_admin'=>'0',
            'is_user'=>'0',
            'is_doctor'=>'1',
            'veterinarian_id'=>'3',
            'password'=>Hash::make('asdfghjkl'),
        ]);
        DB::table('users')->insert([
            'name' => 'Robert J Boyle',
            'email'=>'robertjboyle@gmail.com',
            'is_admin'=>'0',
            'is_user'=>'0',
            'is_doctor'=>'1',
            'veterinarian_id'=>'4',
            'password'=>Hash::make('asdfghjkl'),
        ]);
        DB::table('users')->insert([
            'name' => 'Nevin James',
            'email'=>'nevinjames@gmail.com',
            'is_admin'=>'0',
            'is_user'=>'1',
            'is_doctor'=>'0',
            'password'=>Hash::make('asdfghjkl'),
        ]);
        DB::table('users')->insert([
            'name' => 'Seo James',
            'email'=>'seojames@gmail.com',
            'is_admin'=>'0',
            'is_user'=>'1',
            'is_doctor'=>'0',
            'password'=>Hash::make('asdfghjkl'),
        ]);
        DB::table('users')->insert([
            'name' => 'Reo James',
            'email'=>'reojames@gmail.com',
            'is_admin'=>'0',
            'is_user'=>'1',
            'is_doctor'=>'0',
            'password'=>Hash::make('asdfghjkl'),
        ]);



    }
}
