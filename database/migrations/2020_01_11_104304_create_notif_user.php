<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotifUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notif_user', function (Blueprint $table) {
            $table->increments('id_notif');
            $table->integer('id_payment');
            $table->enum('status',['11','1','22','2']);
            $table->enum('view',['0','1']);
            $table->datetime('datetime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notif_user');
    }
}
