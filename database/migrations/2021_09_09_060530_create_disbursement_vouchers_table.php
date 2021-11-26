<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisbursementVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disbursement_vouchers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dv_tracking_number')->nullable()->unique();
            $table->string('dv_number')->nullable();
            $table->foreignId('user_id');
            $table->foreignId('mop_id');
            $table->foreignId('status_id');
            $table->foreignId('dv_type_sorter_id');
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
        Schema::dropIfExists('disbursement_vouchers');
    }
}
