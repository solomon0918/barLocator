<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('user_id', 50)->primary();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->dateTime('bdate');
            $table->integer('contact_id')->unsigned();
            $table->foreign('contact_id')->references('contact_id')->on('users_contact');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('user_role_id')->unsigned();
            $table->foreign('user_role_id')->references('role_id')->on('users_role');
            $table->integer('is_active')->default('1');
            $table->rememberToken();
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
