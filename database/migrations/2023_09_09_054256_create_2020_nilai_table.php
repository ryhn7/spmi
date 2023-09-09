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
            $table->string('program_studi', 100);
            $table->string('periode', 100);
            $table->string('id_mk', 100);
            $table->string('kelas', 100);
            $table->string('id_mahasiswa', 100);
            $table->string('pertemuan1', 100);
            $table->string('pertemuan2', 100);
            $table->string('pertemuan3', 100);
            $table->string('pertemuan4', 100);
            $table->string('pertemuan5', 100);
            $table->string('pertemuan6', 100);
            $table->string('pertemuan7', 100);
            $table->string('pertemuan8', 100);
            $table->string('pertemuan9', 100);
            $table->string('pertemuan10', 100);
            $table->string('pertemuan11', 100);
            $table->string('pertemuan12', 100);
            $table->string('pertemuan13', 100);
            $table->string('pertemuan14', 100);
            $table->string('pertemuan15', 100);
            $table->string('pertemuan16', 100);
            $table->string('uts_sub_cpmk_1', 100);
            $table->string('uts_sub_cpmk_2', 100);
            $table->string('uts_sub_cpmk_3', 100);
            $table->string('uts_sub_cpmk_4', 100);
            $table->string('uts_sub_cpmk_5', 100);
            $table->string('uts_sub_cpmk_6', 100);
            $table->string('uts_sub_cpmk_7', 100);
            $table->string('uts_sub_cpmk_8', 100);
            $table->string('uts_sub_cpmk_9', 100);
            $table->string('uts_sub_cpmk_10', 100);
            $table->string('uts_sub_cpmk_11', 100);
            $table->string('uts_sub_cpmk_12', 100);
            $table->string('uts_sub_cpmk_13', 100);
            $table->string('uts_sub_cpmk_14', 100);
            $table->string('uas_sub_cpmk_1', 100);
            $table->string('uas_sub_cpmk_2', 100);
            $table->string('uas_sub_cpmk_3', 100);
            $table->string('uas_sub_cpmk_4', 100);
            $table->string('uas_sub_cpmk_5', 100);
            $table->string('uas_sub_cpmk_6', 100);
            $table->string('uas_sub_cpmk_7', 100);
            $table->string('uas_sub_cpmk_8', 100);
            $table->string('uas_sub_cpmk_9', 100);
            $table->string('uas_sub_cpmk_10', 100);
            $table->string('uas_sub_cpmk_11', 100);
            $table->string('uas_sub_cpmk_12', 100);
            $table->string('uas_sub_cpmk_13', 100);
            $table->string('uas_sub_cpmk_14', 100);
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
