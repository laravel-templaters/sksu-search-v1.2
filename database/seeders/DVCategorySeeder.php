<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DVCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('dv_categories')->insert([
            'dv_category'=> 'Cash Advances',
            ]);
            DB::table('dv_categories')->insert([
                'dv_category'=> 'Reimbursements',
                ]);
    }
}
