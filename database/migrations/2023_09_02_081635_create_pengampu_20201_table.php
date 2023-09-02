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
        Schema::create('pengampu_20201', function (Blueprint $table) {
            $table->integer('urutan', true);
            $table->string('program_studi', 65535);
            $table->string('kode', 65535);
            $table->string('pengampu_1', 65535);
            $table->string('pengampu_2', 65535);
            $table->string('pengampu_3', 65535);
            $table->string('pengampu_4', 65535);
            $table->string('pengampu_5', 65535);
            $table->string('pengampu_6', 65535);
            $table->string('pengampu_7', 65535);
            $table->string('pengampu_8', 65535);
            $table->string('pengampu_9', 65535);
            $table->string('pengampu_10', 65535);
            $table->string('pengampu_11', 65535);
            $table->string('pengampu_12', 65535);
            $table->string('pengampu_13', 65535);
            $table->string('pengampu_14', 65535);
            $table->string('pengampu_15', 65535);
            $table->string('pertemuan_1', 65535);
            $table->string('pertemuan_2', 65535);
            $table->string('pertemuan_3', 65535);
            $table->string('pertemuan_4', 65535);
            $table->string('pertemuan_5', 65535);
            $table->string('pertemuan_6', 65535);
            $table->string('pertemuan_7', 65535);
            $table->string('pertemuan_8', 65535);
            $table->string('pertemuan_9', 65535);
            $table->string('pertemuan_10', 65535);
            $table->string('pertemuan_11', 65535);
            $table->string('pertemuan_12', 65535);
            $table->string('pertemuan_13', 65535);
            $table->string('pertemuan_14', 65535);
            $table->string('pertemuan_15', 65535);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengampu_20201');
    }
};
