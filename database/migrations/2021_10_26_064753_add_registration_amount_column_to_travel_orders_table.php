<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRegistrationAmountColumnToTravelOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('travel_orders', function (Blueprint $table) {
            $table->string('registration_amount')->after('has_registration')->nullable();
            $table->string('total')->after('registration_amount');
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
            $table->dropColumn('registration_amount');
             $table->dropColumn('registration_amount');
             
        });
    }
}
