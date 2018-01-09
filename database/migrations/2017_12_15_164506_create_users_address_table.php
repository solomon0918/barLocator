<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_address', function(Blueprint $table){
            $table->increments('address_id');
            $table->string('user_id', 50)->references('user_id')->on('users');
            $table->string('street');
            $table->string('city');
            $table->string('country');
            $table->string('zip_code');
            $table->integer('address_role_id')->unsigned();
            $table->foreign('address_role_id')->references('address_role_id')->on('lk_address_role');
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
        Schema::dropIfExists('users_address');
    }
}
