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
            $table->string('provinsi', 100);
            $table->string('2017', 100);
            $table->string('2018', 100);
            $table->string('2019', 100);
            $table->string('2020', 100);
            $table->string('2021', 100);
            $table->string('2022', 100);
            $table->string('2023', 100);
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
