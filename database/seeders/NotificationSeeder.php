<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notif_types')->insert(
            [
                ['notif_type_name' => 'New TO Submitted to you'],//1
                ['notif_type_name' => 'TO Approved'], //2
                ['notif_type_name' => 'TO Declined'],//3
                ['notif_type_name' => 'Side Note Added'],//4
            ]);
    }
}
