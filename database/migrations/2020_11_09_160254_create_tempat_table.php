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
            $table->bigIncrements('IDtempat');
            $table->unsignedBigInteger('IDpengelola');
            $table->string('nama_tempat');
            $table->string('deskripsi_tempat');
            $table->string('dokumentasi_tempat');
            $table->float('kapasitas');
            $table->string('status');
            $table->float('biaya');
            $table->timestamps();
        });

        Schema::table('tempat', function (Blueprint $table) {
            $table->foreign('IDpengelola')->references('IDpengelola')->on('pengelola');
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
