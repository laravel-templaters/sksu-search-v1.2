<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFundClusterIdToLegacyDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('legacy_documents', function (Blueprint $table) {
            //add column fund_cluster_id after folder_id
            $table->foreignId('fund_cluster_id')->after('folder_id')->nullable();
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
            //
            $table->dropColumn('fund_cluster_id');
        });
    }
}
