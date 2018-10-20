<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Member extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('name');
            $table->string('plate_no');
            $table->string('phone_no');
            $table->string('email')->unique();
            $table->string('no_stnk');

            $table->string('username');
            $table->string('password');
            $table->string('type_member');
            $table->integer('balance');
            $table->string('type_ticket');
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
        Schema::dropIfExists('members');
    }
}
