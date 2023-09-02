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
        Schema::create('2020_pl_cpl', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('program_studi', 65535);
            $table->string('id_pl', 65535);
            $table->string('id_cpl_prodi', 65535);
            $table->string('bobot_pl_cpl', 65535);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('2020_pl_cpl');
    }
};
