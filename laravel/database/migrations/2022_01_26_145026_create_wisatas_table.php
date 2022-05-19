<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWisatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wisatas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('gambar');
            $table->text('deskripsi');
            $table->string('bintang');
            $table->string('harga_disc');
            $table->string('harga_normal');
            $table->string('hotel1');
            $table->string('alamat_hotel1');
            $table->string('hotel2');
            $table->string('alamat_hotel2');
            $table->string('hotel3');
            $table->string('alamat_hotel3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wisatas');
    }
}
