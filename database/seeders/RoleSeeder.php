<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(
            [
                ['role_name' => 'Admin'],//1
                ['role_name' => 'Department Head'], //2
                ['role_name' => 'Secretary'],//3
                ['role_name' => 'Accountant'],//4
                ['role_name' => 'Budget Officer'],//5
                ['role_name' => 'President'],//6
                ['role_name' => 'Archiver']//7
            ]);
    }
}
