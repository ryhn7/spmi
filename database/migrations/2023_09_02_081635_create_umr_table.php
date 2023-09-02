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
        Schema::create('umr', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('provinsi', 65535);
            $table->string('2017', 65535);
            $table->string('2018', 65535);
            $table->string('2019', 65535);
            $table->string('2020', 65535);
            $table->string('2021', 65535);
            $table->string('2022', 65535);
            $table->string('2023', 65535);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('umr');
    }
};
