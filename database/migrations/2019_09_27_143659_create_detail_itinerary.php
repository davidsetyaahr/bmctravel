<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailItinerary extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_itinerary', function (Blueprint $table) {
            $table->increments('id_detail');
            $table->tinyInteger('id_itinerary');
            $table->tinyInteger('id_destination');
            $table->time('time_start');
            $table->time('time_end');
            $table->string('caption', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_itinerary');
    }
}
