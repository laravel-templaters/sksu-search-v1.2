<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_orders', function (Blueprint $table) {
            $table->id();
            $table ->string('tracking_code')->nullable();
            $table->string('purpose');
            $table->string('place_to_go');
            $table->string('has_registration');
            $table->foreignId('dv_type_sorter_id');
            $table->foreignId('dte_id');
            $table->boolean('isDraft')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travel_orders');
    }
}
