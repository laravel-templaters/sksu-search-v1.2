<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchiveFoldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archive_folders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('drawer_id');
            $table->longText('folder_name');
            $table->text('folder_code');
            $table->longText('folder_tracking_no');
            $table->integer('slot_number');
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
        Schema::dropIfExists('archive_folders');
    }
}
