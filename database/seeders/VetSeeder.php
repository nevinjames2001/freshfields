<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class VetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('veterinarian')->insert([
            'veterinarian_name' => 'Dr. John Smith - Hamilton',
        ]);
        DB::table('veterinarian')->insert([
            'veterinarian_name' => 'Dr. Brick Wall - Burlington',
        ]);
        DB::table('veterinarian')->insert([
            'veterinarian_name' => 'Dr. George A. Beller - Brantford',
        ]);
        DB::table('veterinarian')->insert([
            'veterinarian_name' => 'Dr. Robert J. Boyle - Oakville',
        ]);

    }
}
