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
        Schema::create('feedback_mahasiswa', function (Blueprint $table) {
            $table->integer('ID')->primary();
            $table->string('Pernyataan', 1000);
            $table->string('GPM', 1000);
            $table->string('Dekanat', 1000);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feedback_mahasiswa');
    }
};
