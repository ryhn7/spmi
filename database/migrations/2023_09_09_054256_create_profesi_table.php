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
            $table->string('id_mahasiswa', 100);
            $table->string('bidang', 100);
            $table->string('nomor', 100);
            $table->string('penerbit', 100);
            $table->string('awal', 0);
            $table->string('akhir', 0);
            $table->string('sertifikat', 100);
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
