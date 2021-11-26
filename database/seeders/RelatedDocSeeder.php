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
        
         DB::table('related_docs')->insert([
            'd_v_type_sorter_id'=> 1,
            ]);
            DB::table('related_document_lists')->insert([
            'related_docs_id'=> 1,
            ]);
                DB::table('related_document_list_entries')->insert([
                'related_document_list_id'=> 1,
                'related_document_list_entry'=> 'Default Doc',
                ]);


    //start here                
        DB::table('related_docs')->insert([
        'd_v_type_sorter_id'=> 10,]);
            DB::table('related_document_lists')->insert([
            'related_docs_id'=> 2,
            ]);
                DB::table('related_document_list_entries')->insert([
                'related_document_list_id'=> 2,
                'related_document_list_entry'=> 'Statement of Account/Bill (for pre-audit purposes)',
                ]);
                DB::table('related_document_list_entries')->insert([
                'related_document_list_id'=> 2,
                'related_document_list_entry'=> 'Invoice/Official Receipt or machine validated statement of account/bill (for post-audit purposes)',
                ]);
                DB::table('related_document_list_entries')->insert([
                'related_document_list_id'=> 2,
                'related_document_list_entry'=> 'Certification by Agency Head or his authorized representatives that all National Direct Dial (NDD), National Operator Assisted Calls and International Operator Assisted Calls are official calls*For Telephone/Communication Services Only',
                ]);
        
    }
}
