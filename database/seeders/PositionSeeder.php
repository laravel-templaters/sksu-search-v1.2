<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert(
            [
                ['position_name' => 'Admin'], 
                ['position_name' => 'Department Head'], 
                ['position_name' => 'Secretary'],
                ['position_name' => 'Accountant'],
                ['position_name' => 'President'],
                ['position_name' => 'Campus Head'],
                ['position_name' => 'Budget Officer'],
                ['position_name' => 'President\'s Secretary'],
                ['position_name' => 'Faculty'],
                ['position_name' => 'Staff'],
            ]);
    }
}
