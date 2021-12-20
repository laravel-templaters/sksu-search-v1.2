<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFolderDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('folder_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('archiver_id');
            $table->foreignId('archive_folder_id');
            $table->foreignId('disbursement_voucher_id');
            $table->mediumText('document_no');
            $table->date('archive_date');
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
        Schema::dropIfExists('folder_documents');
    }
}
