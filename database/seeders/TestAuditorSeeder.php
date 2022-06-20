<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TestAuditorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Test A. Auditor',
            'birth_day' =>  Carbon::create('2000', '04', '06'),
            'contact_number' => '09123456789',
            'email' => 'testauditor@sksu.edu.ph',
            'password' => Hash::make('auditor123'),
            'role_id' => 8,
            'department_id' => 48,
            'position_id' => 7
         ]);
    }
}
