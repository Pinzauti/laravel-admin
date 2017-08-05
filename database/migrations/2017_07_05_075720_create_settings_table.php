<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->default('Your Site Title');
            $table->string('description')->default('Your Site Description');
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->boolean('isLive')->default(1);
            $table->string('timezone')->default('UTC');
            $table->string('google_analytics_id')->nullable();

            //Social
            $table->string('mlg')->nullable();
            $table->string('twitch')->nullable();
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('google')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();

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
        Schema::dropIfExists('settings');
    }
}
