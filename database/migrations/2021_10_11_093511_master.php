<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Master extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemilih', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nim');
            $table->string('nama');
            $table->string('program_studi');
            $table->string('no_wa');
            $table->string('status');
        });
        Schema::create('pemilihan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('keterangan');
            $table->string('status');
        });
        Schema::create('kandidat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_pemilihan');
            $table->string('no_urut');
            $table->string('ketua');
            $table->string('wakil_ketua');
            $table->string('visi');
            $table->string('misi');
            $table->string('gambar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemilih');
        Schema::dropIfExists('pemilihan');
        Schema::dropIfExists('kandidat');
    }
}
