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
        Schema::create('2020_cpl_sndikti', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('program_studi', 100);
            $table->string('aspek', 100);
            $table->string('id_cpl_sndikti', 100);
            $table->string('cpl_sndikti', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('2020_cpl_sndikti');
    }
};
