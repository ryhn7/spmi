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
        Schema::create('2020_mk', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('program_studi', 100);
            $table->string('kelompok', 100);
            $table->string('id_mk', 100);
            $table->string('mk', 100);
            $table->string('semester', 100);
            $table->string('sks_kuliah', 100);
            $table->string('sks_seminar', 100);
            $table->string('sks_praktikum', 100);
            $table->string('sks', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('2020_mk');
    }
};