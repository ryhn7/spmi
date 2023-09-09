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
        Schema::create('admin_fsm', function (Blueprint $table) {
            $table->integer('id_admin', true);
            $table->string('akses', 100);
            $table->string('nama_admin', 100);
            $table->string('user_admin', 20);
            $table->string('password_admin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_fsm');
    }
};
