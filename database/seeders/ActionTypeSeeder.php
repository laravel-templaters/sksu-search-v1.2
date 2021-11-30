<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ActionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('action_types')->insert([
            'description'=> 'FORWARDED',
            ]);
        DB::table('action_types')->insert([
            'description'=> 'RECEIVED',
            ]);
        DB::table('action_types')->insert([
            'description'=> 'RETURNED',
            ]);
        DB::table('action_types')->insert([
            'description'=> 'CLOSED',
            ]);
        DB::table('action_types')->insert([
            'description'=> 'REJECTED',
            ]);
        
    }
}
