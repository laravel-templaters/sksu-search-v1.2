<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTravelOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('travel_orders', function (Blueprint $table) {
            $table->dropColumn('place_to_go');
            $table->integer('philippine_regions_id')->after('purpose');
            $table->integer('philippine_provinces_id')->after('philippine_regions_id');
            $table->integer('philippine_cities_id')->after('philippine_provinces_id');
            $table->string('date_range')->after('user_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('travel_orders', function (Blueprint $table) {
        $table->dropColumn('philippine_regions_id');
        $table->dropColumn('philippine_provinces_id');
        $table->dropColumn('philippine_cities_id');
        $table->dropColumn('date_range');
        $table->string('place_to_go');
        });
    }
}
