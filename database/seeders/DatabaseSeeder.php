<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([adminseeder::class, DepartmentSeeder::class, PositionSeeder::class, RoleSeeder::class, ModeOfPaymentSeeder::class, DVTypeSeeder::class, DVCategorySeeder::class, DVSubCategorySeeder::class, DTESeeder::class, PhilippineRegionsTableSeeder::class,PhilippineProvincesTableSeeder::class,PhilippineCitiesTableSeeder::class,PhilippineBarangaysTableSeeder::class, RelatedDocSeeder::class]);
    }
}
