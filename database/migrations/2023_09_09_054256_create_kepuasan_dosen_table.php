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
        Schema::create('kepuasan_dosen', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nama_dosen', 100);
            $table->string('NIP', 30);
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
            $table->string('11', 100);
            $table->string('12', 100);
            $table->string('13', 100);
            $table->string('14', 100);
            $table->string('15', 100);
            $table->string('16', 100);
            $table->string('17', 100);
            $table->string('18', 100);
            $table->string('19', 100);
            $table->string('20', 100);
            $table->string('21', 100);
            $table->string('22', 100);
            $table->string('23', 100);
            $table->string('24', 100);
            $table->string('25', 100);
            $table->string('26', 100);
            $table->string('27', 100);
            $table->string('28', 100);
            $table->string('29', 100);
            $table->string('30', 100);
            $table->string('31', 100);
            $table->string('32', 100);
            $table->string('33', 100);
            $table->string('34', 100);
            $table->string('35', 100);
            $table->string('36', 100);
            $table->string('37', 100);
            $table->string('38', 100);
            $table->string('39', 100);
            $table->string('40', 100);
            $table->string('41', 100);
            $table->string('42', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kepuasan_dosen');
    }
};
