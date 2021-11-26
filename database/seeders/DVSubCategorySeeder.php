<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DVSubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //first
        DB::table('dv_sub_categories')->insert([
            'dv_sub_category'=> 'Default',
            'dv_category_id'=> 1,
        ]);
        DB::table('dv_sub_categories')->insert([
            'dv_sub_category'=> 'Local Travel',
            'dv_category_id'=> 2,
            ]);
                 DB::table('dv_type_sorters')->insert([
                    'sorter'=> '3',
                    'dv_type_id'=> 2,
                    'dv_category_id'=> 2,
                    'dv_sub_category_id'=> 2,
                ]);
            DB::table('dv_sub_categories')->insert([
                'dv_sub_category'=> 'Foreign Travel',
                'dv_category_id'=> 2,
                ]);
                 DB::table('dv_type_sorters')->insert([
                    'sorter'=> '3',
                    'dv_type_id'=> 2,
                    'dv_category_id'=> 2,
                    'dv_sub_category_id'=> 3,
                ]);
                DB::table('dv_sub_categories')->insert([
                    'dv_sub_category'=> 'Activity, Program, Project, ETC.',
                    'dv_category_id'=> 2,
                    ]);
                 DB::table('dv_type_sorters')->insert([
                    'sorter'=> '3',
                    'dv_type_id'=> 2,
                    'dv_category_id'=> 2,
                    'dv_sub_category_id'=> 4,
                ]);
                    DB::table('dv_sub_categories')->insert([
                        'dv_sub_category'=> 'Payroll',
                        'dv_category_id'=> 2,
                        ]);
                 DB::table('dv_type_sorters')->insert([
                    'sorter'=> '3',
                    'dv_type_id'=> 2,
                    'dv_category_id'=> 2,
                    'dv_sub_category_id'=> 5,
                ]);
                        DB::table('dv_sub_categories')->insert([
                            'dv_sub_category'=> 'Special Disbursing Officer',
                            'dv_category_id'=> 2,
                            ]);
                 DB::table('dv_type_sorters')->insert([
                    'sorter'=> '3',
                    'dv_type_id'=> 2,
                    'dv_category_id'=> 2,
                    'dv_sub_category_id'=> 6,
                ]);


                            // second
                            DB::table('dv_sub_categories')->insert([
                                'dv_sub_category'=> 'Local Travel',
                                'dv_category_id'=> 3,
                                ]);
                 DB::table('dv_type_sorters')->insert([
                    'sorter'=> '3',
                    'dv_type_id'=> 2,
                    'dv_category_id'=> 3,
                    'dv_sub_category_id'=> 7,
                ]);
                                DB::table('dv_sub_categories')->insert([
                                    'dv_sub_category'=> 'Foreign Travel',
                                    'dv_category_id'=> 3,
                                    ]);
                 DB::table('dv_type_sorters')->insert([
                    'sorter'=> '3',
                    'dv_type_id'=> 2,
                    'dv_category_id'=> 3,
                    'dv_sub_category_id'=> 8,
                ]);
                                    DB::table('dv_sub_categories')->insert([
                                        'dv_sub_category'=> 'Activity, Program, Project, ETC.',
                                        'dv_category_id'=> 3,
                                        ]);
                 DB::table('dv_type_sorters')->insert([
                    'sorter'=> '3',
                    'dv_type_id'=> 2,
                    'dv_category_id'=> 3,
                    'dv_sub_category_id'=> 9,
                ]);
                                        DB::table('dv_sub_categories')->insert([
                                            'dv_sub_category'=> 'Supplies/Materials',
                                            'dv_category_id'=> 3,
                                            ]);
                 DB::table('dv_type_sorters')->insert([
                    'sorter'=> '3',
                    'dv_type_id'=> 2,
                    'dv_category_id'=> 3,
                    'dv_sub_category_id'=> 10,
                ]);

    }
}
