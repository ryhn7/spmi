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
            $table->string('id_mahasiswa1', 65535);
            $table->string('id_mahasiswa2', 65535);
            $table->string('id_mahasiswa3', 65535);
            $table->string('id_mahasiswa4', 65535);
            $table->string('id_mahasiswa5', 65535);
            $table->string('id_mahasiswa6', 65535);
            $table->string('id_mahasiswa7', 65535);
            $table->string('id_mahasiswa8', 65535);
            $table->string('id_mahasiswa9', 65535);
            $table->string('id_mahasiswa10', 65535);
            $table->string('kegiatan', 65535);
            $table->string('jenis', 65535);
            $table->string('penyelenggara', 65535);
            $table->string('tempat', 65535);
            $table->string('awal', 0);
            $table->string('akhir', 0);
            $table->string('tingkat', 65535);
            $table->string('capaian', 65535);
            $table->string('url', 65535);
            $table->string('sertifikat', 65535);
            $table->string('dokumentasi', 65535);
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
