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
        Schema::create('2020_rps', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('program_studi', 65535);
            $table->string('id_mk', 65535);
            $table->string('pertemuan', 65535);
            $table->string('id_cpmk', 65535);
            $table->string('id_sub_cpmk', 65535);
            $table->string('materi', 65535);
            $table->string('metode', 65535);
            $table->string('penilaian', 65535);
            $table->string('bobot', 65535);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('2020_rps');
    }
};
