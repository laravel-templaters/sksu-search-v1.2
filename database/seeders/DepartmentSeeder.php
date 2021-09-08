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
        DB::table('departments')->insert([
            'department_name'=> 'Accounting',
            ]);
            DB::table('departments')->insert([
                'department_name'=> 'Budget Office',
                ]);
                DB::table('departments')->insert([
                    'department_name'=> 'Nursing',
                    ]);
    
    }
}
