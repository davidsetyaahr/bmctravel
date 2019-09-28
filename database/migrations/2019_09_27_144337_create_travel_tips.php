<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelTips extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_tips', function (Blueprint $table) {
            $table->increments('id_travel_tips');
            $table->string('title', 255);
            $table->tinyInteger('id_admin');
            $table->tinyInteger('id_gallery');
            $table->text('content');
            $table->string('permalink', 255);
            $table->dateTime('insert_date');
            $table->dateTime('update_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travel_tips');
    }
}
