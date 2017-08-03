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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('alias')->unique()->nullable();
            $table->string('avatar');
            $table->string('provider');
            $table->string('provider_id')->unique();

            //Personal Info
            $table->integer('gender')->nullable();
            $table->date('birthday')->nullable();
            $table->text('about')->nullable();


            //Address
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('postal_code')->nullable();

            //Social Media
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitch')->nullable();
            $table->string('google')->nullable();
            $table->string('youtube')->nullable();
            $table->string('steam')->nullable();
            $table->string('website')->nullable();


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
