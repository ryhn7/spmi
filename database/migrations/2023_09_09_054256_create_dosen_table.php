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
            $table->string('nama_tanpa_gelar', 100)->primary();
            $table->foreignId('role_id');
            $table->string('nama_dosen');
            $table->string('NIP_dosen', 22);
            $table->string('NIDN', 20);
            $table->string('jabatan_fungsional');
            $table->string('pangkat_golongan');
            $table->string('keahlian', 100);
            $table->string('pendidikan_magister', 100);
            $table->string('pendidikan_doktor', 100);
            $table->string('ijazah_magister', 100);
            $table->string('ijazah_doktor', 100);
            $table->string('serdos', 100);
            $table->string('upload_serdos', 100);
            $table->string('profesi1', 100);
            $table->string('profesi2', 100);
            $table->string('profesi3', 100);
            $table->string('profesi4', 100);
            $table->string('profesi5', 100);
            $table->string('sinta', 100);
            $table->string('scholar', 100);
            $table->string('scopus', 100);
            $table->string('garuda', 100);
            $table->string('wos', 100);
            $table->string('orcid', 100);
            $table->string('instansi_dosen', 100);
            $table->string('user_dosen', 22);
            $table->string('password_dosen');
            $table->string('status_dosen', 100);
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
