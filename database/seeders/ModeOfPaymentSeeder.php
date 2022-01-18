<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModeOfPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mode_of_payments')->insert([
            'mode_of_payment'=> 'MDS Check',
            ]);
            DB::table('mode_of_payments')->insert([
                'mode_of_payment'=> 'Commercial Check',
                ]);
                DB::table('mode_of_payments')->insert([
                    'mode_of_payment'=> 'ADA',
                    ]);
                DB::table('mode_of_payments')->insert([
                    'mode_of_payment'=> 'Others',
                    ]);

    }
}
