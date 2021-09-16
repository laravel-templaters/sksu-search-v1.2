<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDVTypeSortersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dv_type_sorters', function (Blueprint $table) {
            $table->id();
            $table->string('sorter');
            $table->foreignId('dv_type_id');
            $table->foreignId('dv_category_id');
            $table->foreignId('dv_sub_category_id');
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
        Schema::dropIfExists('dv_type_sorters');
    }
}
