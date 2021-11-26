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
            'dv_category'=> 'Default',
            'dv_type_id'=> 1,
            ]);
            DB::table('dv_categories')->insert([
            'dv_category'=> 'Cash Advances',
            'dv_type_id'=> 2,
            ]);
                 DB::table('dv_type_sorters')->insert([
                    'sorter'=> '2',
                    'dv_type_id'=> 2,
                    'dv_category_id'=> 2,
                    'dv_sub_category_id'=> 1,
                ]);
            DB::table('dv_categories')->insert([
                'dv_category'=> 'Reimbursements',
                'dv_type_id'=> 2,
            ]);
                 DB::table('dv_type_sorters')->insert([
                    'sorter'=> '2',
                    'dv_type_id'=> 2,
                    'dv_category_id'=> 3,
                    'dv_sub_category_id'=> 1,
                ]);
            DB::table('dv_categories')->insert([
                'dv_category'=> 'Individual Compensation for Salary/Wage (COS/JO)',
                'dv_type_id'=> 2,
            ]);
                 DB::table('dv_type_sorters')->insert([
                    'sorter'=> '2',
                    'dv_type_id'=> 2,
                    'dv_category_id'=> 4,
                    'dv_sub_category_id'=> 1,
                ]);
            DB::table('dv_categories')->insert([
                'dv_category'=> 'Payroll Compensation for Salaries/Wages (COS/JO)',
                'dv_type_id'=> 2,
            ]);
                 DB::table('dv_type_sorters')->insert([
                    'sorter'=> '2',
                    'dv_type_id'=> 2,
                    'dv_category_id'=> 5,
                    'dv_sub_category_id'=> 1,
                ]);
             DB::table('dv_categories')->insert([
                'dv_category'=> 'Utilities, Fuel, Internet, Telephone, Etc.',
                'dv_type_id'=> 2,
            ]);
                 DB::table('dv_type_sorters')->insert([
                    'sorter'=> '2',
                    'dv_type_id'=> 2,
                    'dv_category_id'=> 6,
                    'dv_sub_category_id'=> 1,
                ]);
            DB::table('dv_categories')->insert([
                'dv_category'=> 'Payment to Contractors of Infrastructure Projects',
                'dv_type_id'=> 2,
            ]);
                
                 DB::table('dv_type_sorters')->insert([
                    'sorter'=> '2',
                    'dv_type_id'=> 2,
                    'dv_category_id'=> 7,
                    'dv_sub_category_id'=> 1,
                ]);
            DB::table('dv_categories')->insert([
                'dv_category'=> 'Individual Compensation for PS (Overload/Overtime/Honorarium/Requested Subject/Others)',
                'dv_type_id'=> 2,
            ]);
            
                 DB::table('dv_type_sorters')->insert([
                    'sorter'=> '2',
                    'dv_type_id'=> 2,
                    'dv_category_id'=> 8,
                    'dv_sub_category_id'=> 1,
                ]);
             DB::table('dv_categories')->insert([
                'dv_category'=> 'Payroll Compensation for PS (Overload/Overtime/Honorarium/Requested Subject/Others)',
                'dv_type_id'=> 2,
            ]);
                 DB::table('dv_type_sorters')->insert([
                    'sorter'=> '2',
                    'dv_type_id'=> 2,
                    'dv_category_id'=> 9,
                    'dv_sub_category_id'=> 1,
                ]);
             DB::table('dv_categories')->insert([
                'dv_category'=> 'Individual Compensation for Salary/Wage (Permanent/Temporary/Casual)',
                'dv_type_id'=> 2,
            ]);
                 DB::table('dv_type_sorters')->insert([
                    'sorter'=> '2',
                    'dv_type_id'=> 2,
                    'dv_category_id'=> 10,
                    'dv_sub_category_id'=> 1,
                ]);
             DB::table('dv_categories')->insert([
                'dv_category'=> 'Regular Payroll for Salaries/Wages (Permanent/Temporary/Casual)',
                'dv_type_id'=> 2,
            ]);
                 DB::table('dv_type_sorters')->insert([
                    'sorter'=> '2',
                    'dv_type_id'=> 2,
                    'dv_category_id'=> 11,
                    'dv_sub_category_id'=> 1,
                ]);
             DB::table('dv_categories')->insert([
                'dv_category'=> 'Individual Compensation for Part-Time Services',
                'dv_type_id'=> 2,
            ]);
            
                 DB::table('dv_type_sorters')->insert([
                    'sorter'=> '2',
                    'dv_type_id'=> 2,
                    'dv_category_id'=> 12,
                    'dv_sub_category_id'=> 1,
                ]);
             DB::table('dv_categories')->insert([
                'dv_category'=> 'Payroll Compensation for Part-Time Services',
                'dv_type_id'=> 2,
            ]);
                 DB::table('dv_type_sorters')->insert([
                    'sorter'=> '2',
                    'dv_type_id'=> 2,
                    'dv_category_id'=> 13,
                    'dv_sub_category_id'=> 1,
                ]);
             DB::table('dv_categories')->insert([
                'dv_category'=> 'Individual Salary/Wage (COS/JO/Laborer)',
                'dv_type_id'=> 2,
            ]);
                 DB::table('dv_type_sorters')->insert([
                    'sorter'=> '2',
                    'dv_type_id'=> 2,
                    'dv_category_id'=> 14,
                    'dv_sub_category_id'=> 1,
                ]);
             DB::table('dv_categories')->insert([
                'dv_category'=> 'Regular Payroll for Salaries/Wages (COS/JO/Laborer)',
                'dv_type_id'=> 2,
            ]);
            
                 DB::table('dv_type_sorters')->insert([
                    'sorter'=> '2',
                    'dv_type_id'=> 2,
                    'dv_category_id'=> 15,
                    'dv_sub_category_id'=> 1,
                ]);
             DB::table('dv_categories')->insert([
                'dv_category'=> 'Individual Pay/Honorarium for External Experts/Professionals (Activity/Project/Program-Based)',
                'dv_type_id'=> 2,
            ]);
                 DB::table('dv_type_sorters')->insert([
                    'sorter'=> '2',
                    'dv_type_id'=> 2,
                    'dv_category_id'=> 16,
                    'dv_sub_category_id'=> 1,
                ]);
             DB::table('dv_categories')->insert([
                'dv_category'=> 'Payroll Pay/Honorarium for External Experts/Professionals (Activity/Project/Program-Based)',
                'dv_type_id'=> 2,
            ]);
                 DB::table('dv_type_sorters')->insert([
                    'sorter'=> '2',
                    'dv_type_id'=> 2,
                    'dv_category_id'=> 17,
                    'dv_sub_category_id'=> 1,
                ]);
             DB::table('dv_categories')->insert([
                'dv_category'=> 'Individual Compensation for Special Allowances and Bonuses',
                'dv_type_id'=> 2,
            ]);
                 DB::table('dv_type_sorters')->insert([
                    'sorter'=> '2',
                    'dv_type_id'=> 2,
                    'dv_category_id'=> 18,
                    'dv_sub_category_id'=> 1,
                ]);
             DB::table('dv_categories')->insert([
                'dv_category'=> 'Payroll Compensation for Special Allowances and Bonuses',
                'dv_type_id'=> 2,
            ]);
                 DB::table('dv_type_sorters')->insert([
                    'sorter'=> '2',
                    'dv_type_id'=> 2,
                    'dv_category_id'=> 19,
                    'dv_sub_category_id'=> 1,
                ]);
             DB::table('dv_categories')->insert([
                'dv_category'=> 'Individual Compensation for Laborers, Student Assistants, Etc.',
                'dv_type_id'=> 2,
            ]);
                 DB::table('dv_type_sorters')->insert([
                    'sorter'=> '2',
                    'dv_type_id'=> 2,
                    'dv_category_id'=> 20,
                    'dv_sub_category_id'=> 1,
                ]);
             DB::table('dv_categories')->insert([
                'dv_category'=> 'Payroll Compensation for Laborers, Student Assistants, Etc.',
                'dv_type_id'=> 2,
            ]);
                 DB::table('dv_type_sorters')->insert([
                    'sorter'=> '2',
                    'dv_type_id'=> 2,
                    'dv_category_id'=> 21,
                    'dv_sub_category_id'=> 1,
                ]);
             DB::table('dv_categories')->insert([
                'dv_category'=> 'Remittance of Payroll Deductions',
                'dv_type_id'=> 2,
            ]);
                 DB::table('dv_type_sorters')->insert([
                    'sorter'=> '2',
                    'dv_type_id'=> 2,
                    'dv_category_id'=> 22,
                    'dv_sub_category_id'=> 1,
                ]);
             DB::table('dv_categories')->insert([
                'dv_category'=> 'Remittance of Taxes Withheld',
                'dv_type_id'=> 2,
            ]);
                 DB::table('dv_type_sorters')->insert([
                    'sorter'=> '2',
                    'dv_type_id'=> 2,
                    'dv_category_id'=> 23,
                    'dv_sub_category_id'=> 1,
                ]);
                
                // DB::table('dv_categories')->insert([
                //     'dv_category'=> 'Cash Advances',
                //     'dv_type_id'=> 2,
                //     ]);
                //     DB::table('dv_categories')->insert([
                //         'dv_category'=> 'Reimbursements',
                //         'dv_type_id'=> 2,
                //         ]);
    }
}
