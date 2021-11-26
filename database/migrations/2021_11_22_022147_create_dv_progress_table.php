<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDvProgressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dv_progress', function (Blueprint $table) {
            $table->id();
            $table->foreignID('disbursement_voucher_id');
            $table->foreignID('last_action_id');
            $table->date('date_start');
            $table->date('date_completed');
            $table->integer('steps');
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
        Schema::dropIfExists('dv_progress');
    }
}
