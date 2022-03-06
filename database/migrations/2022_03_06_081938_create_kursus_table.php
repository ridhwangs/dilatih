<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kursus', function (Blueprint $table) {
            $table->id();
            $table->string('kode_kursus');
            $table->string('kode_instruktur');
            $table->string('nama');
            $table->string('deskripsi');
            $table->enum('jenis', ['online', 'offline']);
            $table->dateTime('date_start');
            $table->dateTime('date_end');
            $table->float('biaya', 8, 2);
            $table->string('kategori');
            $table->string('image');
            $table->integer('hits');
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
        Schema::dropIfExists('kursus');
    }
};
