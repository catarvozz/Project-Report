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
        Schema::create('all_global', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('area', 32);
            $table->string('cash', 255);
            $table->string('edc', 255);
            $table->string('kategori', 255);
            $table->string('total_allglobal', 255);
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
        Schema::dropIfExists('all_global');
    }
};
