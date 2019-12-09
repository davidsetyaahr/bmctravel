<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id_booking');
            $table->integer('id_tour');
            $table->dateTime('booking_date');
            $table->dateTime('travel_date');
            $table->integer('id_user');
            $table->integer('pax',);
            $table->integer('price',);
            $table->string('identity_card');
            $table->enum('status', ['0', '1', '2']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
