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
        Schema::create('2020_sub_cpmk', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('program_studi', 100);
            $table->string('id_mk', 100);
            $table->string('id_sub_cpmk', 100);
            $table->string('sub_cpmk', 100);
            $table->string('bobot_uts', 100);
            $table->string('bobot_uas', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('2020_sub_cpmk');
    }
};
