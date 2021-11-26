<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // $table->string('middle_name')->nullable();
            // $table->string('last_name');
            $table->string('suffix')->nullable();
            //$table->string('address');
            $table->date('birth_day')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('email')->unique();
            $table->string('provider_id')->nullable();
            $table->string('avatar')->nullable();
            // $table->string('employee_number')->unique();
            $table->timestamp('email_verified_at')->nullable();
            // $table->string('username');
            $table->string('password')->nullable();
            $table->foreignId('role_id')->nullable();
            $table->foreignId('department_id')->nullable();
            $table->foreignId('position_id')->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
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
        Schema::dropIfExists('users');
    }
}
