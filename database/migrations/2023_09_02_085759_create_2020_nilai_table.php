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
        Schema::create('2020_nilai', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('program_studi', 65535);
            $table->string('periode', 65535);
            $table->string('id_mk', 65535);
            $table->string('kelas', 65535);
            $table->string('id_mahasiswa', 65535);
            $table->string('pertemuan1', 65535);
            $table->string('pertemuan2', 65535);
            $table->string('pertemuan3', 65535);
            $table->string('pertemuan4', 65535);
            $table->string('pertemuan5', 65535);
            $table->string('pertemuan6', 65535);
            $table->string('pertemuan7', 65535);
            $table->string('pertemuan8', 65535);
            $table->string('pertemuan9', 65535);
            $table->string('pertemuan10', 65535);
            $table->string('pertemuan11', 65535);
            $table->string('pertemuan12', 65535);
            $table->string('pertemuan13', 65535);
            $table->string('pertemuan14', 65535);
            $table->string('pertemuan15', 65535);
            $table->string('pertemuan16', 65535);
            $table->string('uts_sub_cpmk_1', 65535);
            $table->string('uts_sub_cpmk_2', 65535);
            $table->string('uts_sub_cpmk_3', 65535);
            $table->string('uts_sub_cpmk_4', 65535);
            $table->string('uts_sub_cpmk_5', 65535);
            $table->string('uts_sub_cpmk_6', 65535);
            $table->string('uts_sub_cpmk_7', 65535);
            $table->string('uts_sub_cpmk_8', 65535);
            $table->string('uts_sub_cpmk_9', 65535);
            $table->string('uts_sub_cpmk_10', 65535);
            $table->string('uts_sub_cpmk_11', 65535);
            $table->string('uts_sub_cpmk_12', 65535);
            $table->string('uts_sub_cpmk_13', 65535);
            $table->string('uts_sub_cpmk_14', 65535);
            $table->string('uas_sub_cpmk_1', 65535);
            $table->string('uas_sub_cpmk_2', 65535);
            $table->string('uas_sub_cpmk_3', 65535);
            $table->string('uas_sub_cpmk_4', 65535);
            $table->string('uas_sub_cpmk_5', 65535);
            $table->string('uas_sub_cpmk_6', 65535);
            $table->string('uas_sub_cpmk_7', 65535);
            $table->string('uas_sub_cpmk_8', 65535);
            $table->string('uas_sub_cpmk_9', 65535);
            $table->string('uas_sub_cpmk_10', 65535);
            $table->string('uas_sub_cpmk_11', 65535);
            $table->string('uas_sub_cpmk_12', 65535);
            $table->string('uas_sub_cpmk_13', 65535);
            $table->string('uas_sub_cpmk_14', 65535);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('2020_nilai');
    }
};
