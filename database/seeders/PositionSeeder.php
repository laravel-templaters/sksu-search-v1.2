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
                ['position_name' => 'Admin'], //1
                ['position_name' => 'Department Head'], //2
                ['position_name' => 'Secretary'],//3
                ['position_name' => 'Accountant'],//4
                ['position_name' => 'President'],//5
                ['position_name' => 'Campus Head'],//6
                ['position_name' => 'Budget Officer'],//7
                ['position_name' => 'President\'s Secretary'],//8
                ['position_name' => 'Faculty'],//9
                ['position_name' => 'Staff'],//10
                ['position_name' => 'ICU Officer'],//11
            ]);
    }
}
