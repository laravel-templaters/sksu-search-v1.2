<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItenerariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iteneraries', function (Blueprint $table) {
            $table->id();
            $table->string('is_breakfast_covered');
            $table->string('is_lunch_covered');
            $table->string('is_dinner_covered');
            $table->string('is_lodging_covered');
            $table->date('date');
            $table->string('perdiem');
            $table->foreignId('travel_order_id');
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
        Schema::dropIfExists('iteneraries');
    }
}
