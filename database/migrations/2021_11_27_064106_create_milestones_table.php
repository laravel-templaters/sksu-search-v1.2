<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMilestonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('milestones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('disbursement_voucher_id');
            // $table->foreignId('d_v_progress_id');
            $table->foreignId('assigned_user');
            $table->dateTime('date_started')->nullable();
            $table->dateTime('date_completed')->nullable();
            $table->longText('description');
            $table->boolean('isActive')->default(false);
            $table->integer('step_number');
            $table->boolean('is_completed')->default(false);
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
        Schema::dropIfExists('milestones');
    }
}
