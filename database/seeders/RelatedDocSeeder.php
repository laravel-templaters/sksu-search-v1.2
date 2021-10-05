<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RelatedDocSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //first
         DB::table('related_docs')->insert([
            'related_docs'=> 'Related Docs for this Sub Category 1',
            'dv_sub_category_id'=> 1,
            ]);
            DB::table('related_docs')->insert([
                'related_docs'=> 'Related Docs for this Sub Category 2',
                'dv_sub_category_id'=> 1,
                ]);
                DB::table('related_docs')->insert([
                    'related_docs'=> 'Related Docs for this Sub Category 3',
                    'dv_sub_category_id'=> 1,
                    ]);

         //second
         DB::table('related_docs')->insert([
            'related_docs'=> 'Related Docs for this Sub Category (1)',
            'dv_sub_category_id'=> 2,
            ]);
            DB::table('related_docs')->insert([
                'related_docs'=> 'Related Docs for this Sub Category (2)',
                'dv_sub_category_id'=> 2,
                ]);          
    }
}
