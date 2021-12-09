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
                ['position_name' => 'Director'],//12
                ['position_name' => 'Vice President'],//13
                ['position_name' => 'University Board Secretary & Director'],//14
                ['position_name' => 'Chief'],//15
                ['position_name' => 'Asst. Director'],//16
                ['position_name' => 'University Registrar'],//17
                ['position_name' => 'Dean'],//18
                ['position_name' => 'Chairman'],//19
                ['position_name' => 'Budget Officer III'],//20
                ['position_name' => 'University Cashier'],//21
                ['position_name' => 'Accounting Officer'],//22
                ['position_name' => 'Admin Officer'],//23

            ]);
    }
}
