<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ACCESS CAMPUS
        DB::table('campuses')->insert([
            'campus_name'=> 'ACCESS',
            'campus_address'=> 'EJC Montilla, Tacurong City, 9800, Philippines',
            'campus_shortCode'=> 'ACSC',
        ]);
        DB::table('departments')->insert([
            'department_name'=> 'Administration',
            'department_short_code'=>'acc-adm',
            'campus_id'=>'1',
            ]);//1
            DB::table('departments')->insert([
                'department_name'=> 'Budget Office',
                'department_short_code'=>'acc-budg',
                'campus_id'=>'1',
                ]);//2
                DB::table('departments')->insert([
                    'department_name'=> 'Accounting Office',
                    'department_short_code'=>'acc-acto',
                    'campus_id'=>'1',
                    ]);//3
                    DB::table('departments')->insert([
                    'department_name'=> 'Information and Communications Tech',
                    'department_short_code'=>'acc-ict',
                    'campus_id'=>'1',
                    ]);//4
                    DB::table('departments')->insert([
                    'department_name'=> 'Internal Control Unit',
                    'department_short_code'=>'acc-icu',
                    'campus_id'=>'1',
                    ]);//5
    
    }
}
