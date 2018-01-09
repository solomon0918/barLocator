<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersContactNumberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_contact', function(Blueprint $table){
            $table->increments('contact_id');
            $table->string('country_code')->references('id')->on('lk_contact_country_code');
            $table->integer('contact_role_id')->unsigned();
            $table->foreign('contact_role_id')->references('contact_role_id')->on('lk_contact_role');
            $table->string('number')->unique();
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
        Schema::dropIfExists('users_contact');
    }
}
