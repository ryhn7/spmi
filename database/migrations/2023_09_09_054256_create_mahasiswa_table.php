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
            $table->string('nama_mahasiswa', 100);
            $table->string('id_mahasiswa', 20)->primary();
            $table->foreignId('role_id');
            $table->string('program_studi', 100);
            $table->string('periode', 100);
            $table->string('lulus', 0);
            $table->string('lulus2', 0);
            $table->string('IPK', 100);
            $table->string('status', 100);
            $table->string('waktu_tunggu', 100);
            $table->string('penghasilan', 100);
            $table->string('nama_atasan', 100);
            $table->string('jabatan_atasan', 100);
            $table->string('nama_perusahaan', 100);
            $table->string('provinsi', 100);
            $table->string('kota', 100);
            $table->string('tingkat', 100);
            $table->string('kesesuaian', 100);
            $table->string('asal', 100);
            $table->string('kurikulum', 100);
            $table->string('user_mahasiswa', 20);
            $table->string('password_mahasiswa');
            $table->string('foto_mahasiswa', 100);
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
