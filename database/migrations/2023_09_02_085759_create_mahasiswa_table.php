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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->string('nama_mahasiswa', 65535);
            $table->string('id_mahasiswa', 20)->primary();
            $table->string('program_studi', 65535);
            $table->string('periode', 65535);
            $table->string('lulus', 0);
            $table->string('lulus2', 0);
            $table->string('IPK', 65535);
            $table->string('status', 65535);
            $table->string('waktu_tunggu', 65535);
            $table->string('penghasilan', 65535);
            $table->string('nama_atasan', 65535);
            $table->string('jabatan_atasan', 65535);
            $table->string('nama_perusahaan', 65535);
            $table->string('provinsi', 65535);
            $table->string('kota', 65535);
            $table->string('tingkat', 65535);
            $table->string('kesesuaian', 65535);
            $table->string('asal', 65535);
            $table->string('kurikulum', 65535);
            $table->string('user_mahasiswa', 20);
            $table->string('password_mahasiswa');
            $table->string('foto_mahasiswa', 65535);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
};
