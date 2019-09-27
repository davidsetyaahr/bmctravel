<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourPackages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_packages', function (Blueprint $table) {
            $table->increments('id_tour');
            $table->string('tour_name', 255);
            $table->tinyInteger('id_category');
            $table->tinyInteger('id_type');
            $table->tinyInteger('id_duration');
            $table->text('overview');
            $table->tinyInteger('id_gallery');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tour_packages');
    }
}
