<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name'=> 'Kristine Mae',
            'middle_name'=> 'H.',
            'last_name'=> 'Ampas',
            'address'=> 'Tacurong City',
            'birth_day'=>  Carbon::create('2000', '01', '01'),   
            'contact_number'=>'09123456789',        
            'email'=>'kha@admin.com',
            'employee_number'=>'0000001',
            'username'=> 'admin',
            'password'=> Hash::make('searchadmin0123'),
            'role_id'=>1,
            'department_id'=>1,
            'position_id'=>1]);
    }
}
