<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DTESeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dtes')->insert([
            'amount'=> 'Region I',
            'region'=>'1500']);

            DB::table('dtes')->insert([
                'amount'=> 'Region II',
                'region'=>'1500']);
        
                DB::table('dtes')->insert([
                    'amount'=> 'Region III',
                    'region'=>'1500']);
                    
                    DB::table('dtes')->insert([
                        'amount'=> 'Region IV-A',
                        'region'=>'2200']);
                        
                        DB::table('dtes')->insert([
                            'amount'=> 'Region IV-B',
                            'region'=>'2200']);
                            
                            DB::table('dtes')->insert([
                                'amount'=> 'Region V',
                                'region'=>'1500']);
                                
                                DB::table('dtes')->insert([
                                    'amount'=> 'Region VI',
                                    'region'=>'1800']);
                                
                                    DB::table('dtes')->insert([
                                        'amount'=> 'Region VII',
                                        'region'=>'1800']);
                                    
                                        DB::table('dtes')->insert([
                                            'amount'=> 'Region VIII',
                                            'region'=>'1500']);
                                            
                                            DB::table('dtes')->insert([
                                                'amount'=> 'Region IX',
                                                'region'=>'1500']);
                                            
                                                DB::table('dtes')->insert([
                                                    'amount'=> 'Region X',
                                                    'region'=>'1800']);
                                                    
                                                    DB::table('dtes')->insert([
                                                        'amount'=> 'Region XI',
                                                        'region'=>'1800']);
                                                   
                                                        DB::table('dtes')->insert([
                                                            'amount'=> 'Region XII',
                                                            'region'=>'1500']);
                                                    
                                                            DB::table('dtes')->insert([
                                                                'amount'=> 'Region XIII',
                                                                'region'=>'1500']);
                                                           
                                                                DB::table('dtes')->insert([
                                                                    'amount'=> 'BARMM',
                                                                    'region'=>'1500']);
                                                                
                                                                    DB::table('dtes')->insert([
                                                                        'amount'=> 'CAR',
                                                                        'region'=>'1800']);
                                                                  
                                                                        DB::table('dtes')->insert([
                                                                            'amount'=> 'NCR',
                                                                            'region'=>'2200']);    
    }
}
