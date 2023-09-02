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
        Schema::create('dosen', function (Blueprint $table) {
            $table->string('nama_tanpa_gelar', 100);
            $table->string('nama_dosen');
            $table->string('NIP_dosen', 20)->primary();
            $table->string('NIDN', 20);
            $table->string('jabatan_fungsional');
            $table->string('pangkat_golongan');
            $table->string('keahlian', 65535);
            $table->string('pendidikan_magister', 65535);
            $table->string('pendidikan_doktor', 65535);
            $table->string('ijazah_magister', 65535);
            $table->string('ijazah_doktor', 65535);
            $table->string('serdos', 65535);
            $table->string('upload_serdos', 65535);
            $table->string('profesi1', 65535);
            $table->string('profesi2', 65535);
            $table->string('profesi3', 65535);
            $table->string('profesi4', 65535);
            $table->string('profesi5', 65535);
            $table->string('sinta', 65535);
            $table->string('scholar', 65535);
            $table->string('scopus', 65535);
            $table->string('garuda', 65535);
            $table->string('wos', 65535);
            $table->string('orcid', 65535);
            $table->string('instansi_dosen', 65535);
            $table->string('user_dosen', 20);
            $table->string('password_dosen');
            $table->string('status_dosen', 65535);
            $table->string('foto_dosen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dosen');
    }
};
