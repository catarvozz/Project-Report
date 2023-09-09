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
        Schema::create('summary_global', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipe', 255);
            $table->string('cash', 255);
            $table->string('debittransfer', 255);
            $table->string('total_sumglobal', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('summary_global');
    }
};
