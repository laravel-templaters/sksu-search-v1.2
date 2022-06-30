<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPayeeNameAndParticularsColumnToLegacyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('legacy_documents', function (Blueprint $table) {

            $table->string('payee_name')->after('date')->nullable();
            $table->text('particulars')->after('payee_name')->nullable();
      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('legacy_documents', function (Blueprint $table) {
            $table->dropColumn('payee_name');
            $table->dropColumn('particulars'); 
        });
    }
}
