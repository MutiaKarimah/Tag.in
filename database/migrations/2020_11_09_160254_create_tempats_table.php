<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempats', function (Blueprint $table) {
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

        Schema::table('tempats', function (Blueprint $table) {
            $table->foreign('IDpengelola')->references('IDpengelola')->on('pengelolas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tempats');
    }
}
