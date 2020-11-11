<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservasi', function (Blueprint $table) {
            $table->bigIncrements('IDreservasi');
            $table->unsignedBigInteger('IDtempat');
            $table->unsignedBigInteger('IDpengguna');
            $table->float('lama_reservasi');
            $table->date('tanggal_reservasi');
            $table->timestamps();
        });

        Schema::table('reservasi', function (Blueprint $table) {
            $table->foreign('IDtempat')->references('IDtempat')->on('tempat');
            $table->foreign('IDpengguna')->references('IDpengguna')->on('pengguna');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservasi');
    }
}
