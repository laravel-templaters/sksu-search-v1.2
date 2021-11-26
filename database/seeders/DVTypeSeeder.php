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
            'dv_type'=> 'Default',
        ]);
        
        DB::table('dv_types')->insert([
            'dv_type'=> 'Disbursements',
        ]);
                
        DB::table('dv_types')->insert([
            'dv_type'=> 'Travel Order',
        ]);

        DB::table('dv_type_sorters')->insert([
            'sorter'=> '1',
            'dv_type_id'=> 3,
            'dv_category_id'=> 2,
            'dv_sub_category_id'=> 1,
        ]);

        DB::table('dv_types')->insert([
            'dv_type'=> 'Liquidation',
        ]);
        DB::table('dv_types')->insert([
            'dv_type'=> 'Communication',
        ]);
    }
}
