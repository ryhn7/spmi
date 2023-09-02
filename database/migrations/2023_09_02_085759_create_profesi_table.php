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
        Schema::create('profesi', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('id_mahasiswa', 65535);
            $table->string('bidang', 65535);
            $table->string('nomor', 65535);
            $table->string('penerbit', 65535);
            $table->string('awal', 0);
            $table->string('akhir', 0);
            $table->string('sertifikat', 65535);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profesi');
    }
};
