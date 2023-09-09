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
        Schema::create('prestasi', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('id_mahasiswa1', 100);
            $table->string('id_mahasiswa2', 100);
            $table->string('id_mahasiswa3', 100);
            $table->string('id_mahasiswa4', 100);
            $table->string('id_mahasiswa5', 100);
            $table->string('id_mahasiswa6', 100);
            $table->string('id_mahasiswa7', 100);
            $table->string('id_mahasiswa8', 100);
            $table->string('id_mahasiswa9', 100);
            $table->string('id_mahasiswa10', 100);
            $table->string('kegiatan', 100);
            $table->string('jenis', 100);
            $table->string('penyelenggara', 100);
            $table->string('tempat', 100);
            $table->string('awal', 0);
            $table->string('akhir', 0);
            $table->string('tingkat', 100);
            $table->string('capaian', 100);
            $table->string('url', 100);
            $table->string('sertifikat', 100);
            $table->string('dokumentasi', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestasi');
    }
};
