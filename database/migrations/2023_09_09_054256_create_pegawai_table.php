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
        Schema::create('pegawai', function (Blueprint $table) {
            $table->integer('id_pegawai', true);
            $table->string('nama_tanpa_gelar');
            $table->string('nama_pegawai');
            $table->string('NIP_pegawai', 20);
            $table->string('pekerjaan_pegawai');
            $table->string('jabatan_fungsional');
            $table->string('pendidikan_terakhir', 10);
            $table->string('foto_pegawai', 25);
            $table->string('user_pegawai', 22);
            $table->string('password_pegawai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawai');
    }
};
