<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'first_name'=> 'Kristine Mae',
        //     'middle_name'=> 'H.',
        //     'last_name'=> 'Ampas',
        //     'address'=> 'Tacurong City',
        //     'birth_day'=>  Carbon::create('2000', '01', '01'),   
        //     'contact_number'=>'09123456789',        
        //     'email'=>'kha@admin.com',
        //     'employee_number'=>'0000001',
        //     'username'=> 'admin',
        //     'password'=> Hash::make('searchadmin0123'),
        //     'role_id'=>1,
        //     'department_id'=>1,
        //     'position_id'=>1]);

        //     DB::table('users')->insert([
        //         'first_name'=> 'Jane',
        //         'middle_name'=> 'Sec',
        //         'last_name'=> 'Sappe',
        //         'address'=> 'Tacurong City',
        //         'birth_day'=>  Carbon::create('2000', '09', '10'),   
        //         'contact_number'=>'09123456789',        
        //         'email'=>'sec@admin.com',
        //         'employee_number'=>'0000002',
        //         'username'=> 'sec',
        //         'password'=> Hash::make('sec123'),
        //         'role_id'=>3,
        //         'department_id'=>2,
        //         'position_id'=>3]);

                DB::table('users')->insert([
                    'name'=> 'Dolores T. Head',
                    'birth_day'=>  Carbon::create('2000', '04', '06'),   
                    'contact_number'=>'09123456789',        
                    'email'=>'dhead@d.com',
                    'password'=> Hash::make('department123'),
                    'role_id'=>2,
                    'department_id'=>3,
                    'position_id'=>2]);

                 DB::table('users')->insert([
                    'name'=> 'JESHER Y. PALOMARIA, CPA',
                    'birth_day'=>  Carbon::create('2000', '04', '06'),   
                    'contact_number'=>'09123456789',        
                    'email'=>'jesher@act.com',
                    'password'=> Hash::make('jesher123'),
                    'role_id'=>2,
                    'department_id'=>3,
                    'position_id'=>4]);

                 DB::table('users')->insert([
                    'name'=> 'ROLANDO F. HECHANOVA, PhD',
                    'birth_day'=>  Carbon::create('2000', '04', '06'),   
                    'contact_number'=>'09123456789',        
                    'email'=>'rhech@pres.com',
                    'password'=> Hash::make('jesher123'),
                    'role_id'=>2,
                    'department_id'=>1,
                    'position_id'=>5]);
                
                //test vars
                 DB::table('users')->insert([
                    'name'=> 'Heiven C Cordero',
                    'birth_day'=>  Carbon::create('1986', '04', '06'),   
                    'contact_number'=>'09123456789',        
                    'email'=>'hcc@dep.com',
                    'password'=> Hash::make('hcc123'),
                    'role_id'=>3,
                    'department_id'=>3,
                    'position_id'=>2]);

                 DB::table('users')->insert([
                    'name'=> 'Mentha C. La Palma',
                    'birth_day'=>  Carbon::create('1998', '04', '06'),   
                    'contact_number'=>'09123456789',        
                    'email'=>'mclp@budget.com',
                    'password'=> Hash::make('mclp123'),
                    'role_id'=>3,
                    'department_id'=>3,
                    'position_id'=>7]);

                 DB::table('users')->insert([
                    'name'=> 'Douglas P. Canlubang',
                    'birth_day'=>  Carbon::create('1988', '04', '06'),   
                    'contact_number'=>'09123456789',        
                    'email'=>'dpc@icu.com',
                    'password'=> Hash::make('dpc123'),
                    'role_id'=>3,
                    'department_id'=>3,
                    'position_id'=>11]);

        //             DB::table('users')->insert([
        //                 'first_name'=> 'Travis',
        //                 'middle_name'=> 'T',
        //                 'last_name'=> 'Scott',
        //                 'address'=> 'Tacurong City',
        //                 'birth_day'=>  Carbon::create('2000', '02', '03'),   
        //                 'contact_number'=>'09312356688',        
        //                 'email'=>'dhead2@d.com',
        //                 'employee_number'=>'0000005',
        //                 'username'=> 'dhead2',
        //                 'password'=> Hash::make('department123'),
        //                 'role_id'=>2,
        //                 'department_id'=>3,
        //                 'position_id'=>2]);
    }
}
