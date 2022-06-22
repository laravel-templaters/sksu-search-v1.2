<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ArgieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //Archiver
       DB::table('users')->insert([
        'name'=> 'Gerald B Rebamonte',
        'birth_day'=>  Carbon::create('1999', '06', '10'),   
        'contact_number'=>'09123456789',        
        'email'=>'geraldrebamonte@sksu.edu.ph',
        'password'=> Hash::make('rebamonte123'),
        'role_id'=>7,
        'department_id'=>3,
        'position_id'=>24]);

    }
}
