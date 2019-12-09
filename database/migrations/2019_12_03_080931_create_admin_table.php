<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->increments('id_admin');
            $table->string('email', 100);
            $table->string('password', 100);
            $table->string('firstname', 20);
            $table->string('lastname', 20);
            $table->string('phone', 13);
        });

        DB::table('admin')->insert(
            array(
                'email' => 'admin@gmail.com',
                'password' => '21232f297a57a5a743894a0e4a801fc3',
                'firstname' => 'admin',
                'lastname' => 'okta',
                'phone' => '082123123123',
                'verified' => true
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin');
    }
}
