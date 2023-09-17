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
        Schema::create('feedback_tendik', function (Blueprint $table) {
            $table->integer('ID')->primary();
            $table->integer('Aktor')->nullable();
            $table->text('1')->nullable();
            $table->text('2')->nullable();
            $table->text('3')->nullable();
            $table->text('4')->nullable();
            $table->text('5')->nullable();
            $table->text('6')->nullable();
            $table->text('7')->nullable();
            $table->text('8')->nullable();
            $table->text('9')->nullable();
            $table->text('10')->nullable();
            $table->text('11')->nullable();
            $table->text('12')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feedback_tendik');
    }
};
