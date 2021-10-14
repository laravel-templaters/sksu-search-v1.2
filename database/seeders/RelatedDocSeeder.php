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
            'related_docs'=> 'TRAVEL ORDER',
            'dv_sub_category_id'=> 1,
            ]);
            DB::table('related_docs')->insert([
                'related_docs'=> 'REQUEST LETTER',
                'dv_sub_category_id'=> 1,
                ]);
                DB::table('related_docs')->insert([
                    'related_docs'=> 'OTHERS',
                    'dv_sub_category_id'=> 1,
                    ]);

         //second
         DB::table('related_docs')->insert([
            'related_docs'=> 'TRAVEL ORDER',
            'dv_sub_category_id'=> 2,
            ]);
            DB::table('related_docs')->insert([
                'related_docs'=> 'REQUEST LETTER',
                'dv_sub_category_id'=> 2,
                ]);
          
          //third
          DB::table('related_docs')->insert([
            'related_docs'=> 'TRAVEL ORDER',
            'dv_sub_category_id'=> 3,
            ]);
            DB::table('related_docs')->insert([
                'related_docs'=> 'REQUEST LETTER',
                'dv_sub_category_id'=> 3,
                ]);
                
          //fourth
          DB::table('related_docs')->insert([
            'related_docs'=> 'TRAVEL ORDER',
            'dv_sub_category_id'=> 4,
            ]);
            DB::table('related_docs')->insert([
                'related_docs'=> 'REQUEST LETTER',
                'dv_sub_category_id'=> 4,
                ]);

           //fifth
          DB::table('related_docs')->insert([
            'related_docs'=> 'TRAVEL ORDER',
            'dv_sub_category_id'=> 5,
            ]);
            DB::table('related_docs')->insert([
                'related_docs'=> 'REQUEST LETTER',
                'dv_sub_category_id'=> 5,
                ]); 
                
         //sixth
         DB::table('related_docs')->insert([
            'related_docs'=> 'TRAVEL ORDER',
            'dv_sub_category_id'=> 6,
            ]);
            DB::table('related_docs')->insert([
                'related_docs'=> 'REQUEST LETTER',
                'dv_sub_category_id'=> 6,
                ]);
                DB::table('related_docs')->insert([
                    'related_docs'=> 'OTHERS',
                    'dv_sub_category_id'=> 6,
                    ]); 
                    
                    
          //seventh
          DB::table('related_docs')->insert([
            'related_docs'=> 'TRAVEL ORDER',
            'dv_sub_category_id'=> 7,
            ]);
            DB::table('related_docs')->insert([
                'related_docs'=> 'REQUEST LETTER',
                'dv_sub_category_id'=> 7,
                ]);  
                
        //eighth
        DB::table('related_docs')->insert([
            'related_docs'=> 'TRAVEL ORDER',
            'dv_sub_category_id'=> 8,
            ]);
            DB::table('related_docs')->insert([
                'related_docs'=> 'REQUEST LETTER',
                'dv_sub_category_id'=> 8,
                ]);
                
        //ninth
        DB::table('related_docs')->insert([
            'related_docs'=> 'TRAVEL ORDER',
            'dv_sub_category_id'=> 9,
            ]);
            DB::table('related_docs')->insert([
                'related_docs'=> 'REQUEST LETTER',
                'dv_sub_category_id'=> 9,
                ]);        
    }
}
