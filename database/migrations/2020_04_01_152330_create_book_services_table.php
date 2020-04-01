<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idBooking')->unsigned();
            $table->bigInteger('idExtraService')->unsigned();
            $table->timestamps();
            $table->foreign('idBooking')->references('idBooking')->on('bookings');
            $table->foreign('idExtraService')->references('idExtraService')->on('extra_services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_services');
    }
}
