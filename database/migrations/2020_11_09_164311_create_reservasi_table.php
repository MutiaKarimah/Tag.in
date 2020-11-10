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
            $table->id();
            $table->string('IDreservasi')->unique();
            $table->string('IDtempat');
            $table->string('IDpengguna');
            $table->float('lama_reservasi');
            $table->date('tanggal_reservasi');
            $table->foreign('IDtempat')->references('IDtempat')->on('tempat');
            $table->foreign('IDpengguna')->references('IDpengguna')->on('pengguna');
            $table->timestamps();
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
