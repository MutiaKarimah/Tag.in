<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempat', function (Blueprint $table) {
            $table->id();
            $table->string('IDtempat');
            $table->string('IDpengelola');
            $table->string('nama_tempat');
            $table->string('deskripsi_tempat');
            $table->string('dokumentasi_tempat');
            $table->float('kapasitas');
            $table->string('status');
            $table->float('biaya');
            $table->primary('IDtempat');
            $table->foreign('IDpengelola')->references('IDpengelola')->on('pengelola');
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
        Schema::dropIfExists('tempat');
    }
}
