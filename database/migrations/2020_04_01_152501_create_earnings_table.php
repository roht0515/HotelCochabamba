<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEarningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('earnings', function (Blueprint $table) {
            $table->bigIncrements('idPayment');
            $table->integer('charge');
            $table->date('date');
            $table->bigInteger('idUser')->unsigned();
            $table->bigInteger('idBooking')->unsigned();      
            $table->timestamps();
            $table->foreign('idUser')->references('idUser')->on('users');
            $table->foreign('idBooking')->references('idBooking')->on('bookings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('earnings');
    }
}
