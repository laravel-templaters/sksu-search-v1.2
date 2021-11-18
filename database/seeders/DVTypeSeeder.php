<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DVTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dv_types')->insert([
            'dv_type'=> 'Disbursements',
            ]);
            DB::table('dv_types')->insert([
                'dv_type'=> 'Travel Order',
                ]);
                 DB::table('dv_types')->insert([
                'dv_type'=> 'Liquidation',
                ]);
                DB::table('dv_types')->insert([
                'dv_type'=> 'Communication',
                ]);
    }
}
