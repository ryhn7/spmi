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
        Schema::create('feedback_dosen', function (Blueprint $table) {
            $table->integer('ID')->primary();
            $table->string('Pernyataan', 1000)->nullable();
            $table->string('TPMF', 1000)->nullable();
            $table->string('Dekanat', 1000)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feedback_dosen');
    }
};
