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
        DB::table('campus')->insert([
            'campus_name'=> 'ACCESS',
            'campus_address'=> 'EJC Montilla, Tacurong City, 9800, Philippines',
            'campus_shortCode'=> 'ACSC',
        ]);
        DB::table('departments')->insert([
            'department_name'=> 'Administration',
            'campus_id'=>'1',
            ]);
            DB::table('departments')->insert([
                'department_name'=> 'Budget Office',
                'campus_id'=>'1',
                ]);
                DB::table('departments')->insert([
                    'department_name'=> 'Accounting Office',
                    'campus_id'=>'1',
                    ]);
                    DB::table('departments')->insert([
                    'department_name'=> 'ICT',
                    'campus_id'=>'1',
                    ]);
    
    }
}
