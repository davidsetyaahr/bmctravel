<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinations', function (Blueprint $table) {
            $table->increments('id_destination');
            $table->string('destination_name', 255);
            $table->tinyInteger('id_category');
            $table->tinyInteger('id_city');
            $table->string('gallery', 25);
            $table->text('overview');
            $table->string('map', 255);
            $table->text('information');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destinations');
    }
}
