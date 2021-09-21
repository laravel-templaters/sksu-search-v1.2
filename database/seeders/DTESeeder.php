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
            'amount'=> '1500',
            'region'=>'REGION I (ILOCOS REGION)',
            'region_code' => '01']);

            DB::table('dtes')->insert([
                'amount'=> '1500',
                'region'=>'REGION II (CAGAYAN VALLEY)',
                'region_code' => '02']);
        
                DB::table('dtes')->insert([
                    'amount'=> '1500',
                    'region'=>'REGION III (CENTRAL LUZON)',
                    'region_code' => '03']);
                    
                    DB::table('dtes')->insert([
                        'amount'=> '2200',
                        'region'=>'REGION IV-A (CALABARZON)',
                        'region_code' => '04']);
                        
                        DB::table('dtes')->insert([
                            'amount'=> '2200',
                            'region'=>'REGION IV-B (MIMAROPA)',
                            'region_code' => '17']);
                            
                            DB::table('dtes')->insert([
                                'amount'=> '1500',
                                'region'=>'REGION V (BICOL REGION)',
                                'region_code' => '05']);
                                
                                DB::table('dtes')->insert([
                                    'amount'=> '1800',
                                    'region'=>'REGION VI (WESTERN VISAYAS)',
                                    'region_code' => '06']);
                                
                                    DB::table('dtes')->insert([
                                        'amount'=> '1800',
                                        'region'=>'REGION VII (CENTRAL VISAYAS)',
                                        'region_code' => '07']);
                                    
                                        DB::table('dtes')->insert([
                                            'amount'=> '1500',
                                            'region'=>'REGION VIII (EASTERN VISAYAS)',
                                            'region_code' => '08']);
                                            
                                            DB::table('dtes')->insert([
                                                'amount'=> '1500',
                                                'region'=>'REGION IX (ZAMBOANGA PENINSULA)',
                                                'region_code' => '09']);
                                            
                                                DB::table('dtes')->insert([
                                                    'amount'=> '1800',
                                                    'region'=>'REGION X (NORTHERN MINDANAO)',
                                                    'region_code' => '10']);
                                                    
                                                    DB::table('dtes')->insert([
                                                        'amount'=> '1800',
                                                        'region'=>'REGION XI (DAVAO REGION)',
                                                        'region_code' => '11']);
                                                   
                                                        DB::table('dtes')->insert([
                                                            'amount'=> '1500',
                                                            'region'=>'REGION XII (SOCCSKSARGEN)',
                                                            'region_code' => '12']);
                                                    
                                                            DB::table('dtes')->insert([
                                                                'amount'=> '2200',
                                                                'region'=>'NATIONAL CAPITAL REGION (NCR)',
                                                                'region_code' => '13']);
                                                           
                                                                DB::table('dtes')->insert([
                                                                    'amount'=> '1800',
                                                                    'region'=>'CORDILLERA ADMINISTRATIVE REGION (CAR)',
                                                                    'region_code' => '14']);
                                                                
                                                                    DB::table('dtes')->insert([
                                                                        'amount'=> '1500',
                                                                        'region'=>'BANGSAMORO AUTONOMOUS REGION IN MUSLIM MINDANAO (BARMM)',
                                                                        'region_code' => '15']);
                                                                  
                                                                        DB::table('dtes')->insert([
                                                                            'amount'=> '1500',
                                                                            'region'=>'REGION XIII (Caraga)',
                                                                            'region_code' => '16']);    
    }
}
