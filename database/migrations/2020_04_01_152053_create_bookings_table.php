<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('idBooking');
            $table->date('startDate');
            $table->date('endDate');
            $table->string('status');
            $table->integer('cost');
            $table->bigInteger('idUser')->unsigned();
            $table->bigInteger('idRoom')->unsigned();
            $table->timestamps();
            $table->foreign('idUser')->references('idUser')->on('users');
            $table->foreign('idRoom')->references('idRoom')->on('rooms');
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
