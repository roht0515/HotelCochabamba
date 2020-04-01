<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBedPerRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bed_per_rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idRoom')->unsigned();
            $table->bigInteger('idBed')->unsigned();
            $table->timestamps();
            $table->foreign('idRoom')->references('idRoom')->on('rooms');
            $table->foreign('idBed')->references('idBed')->on('beds');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bed_per_rooms');
    }
}
