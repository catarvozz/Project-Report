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
        Schema::create('setoran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uang_setoran', 255);
            $table->string('keterangan', 255);
            $table->string('jumlah', 255);
            $table->string('total', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('setoran');
    }
};
