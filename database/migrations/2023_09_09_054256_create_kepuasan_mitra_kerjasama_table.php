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
        Schema::create('kepuasan_mitra_kerjasama', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nama', 100);
            $table->string('jabatan', 100);
            $table->string('nama_perusahaan', 100);
            $table->string('date_time', 0);
            $table->string('1', 100);
            $table->string('2', 100);
            $table->string('3', 100);
            $table->string('4', 100);
            $table->string('5', 100);
            $table->string('6', 100);
            $table->string('7', 100);
            $table->string('8', 100);
            $table->string('9', 100);
            $table->string('10', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kepuasan_mitra_kerjasama');
    }
};