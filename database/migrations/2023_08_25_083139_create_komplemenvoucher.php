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
        Schema::create('komplemenvoucher', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('komplemen_voucher', 255);
            $table->string('lokasi', 255);
            $table->string('vouchertl', 255);
            $table->string('komplemen', 255);
            $table->string('total', 255);
            $table->string('keterangan', 255);
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
        Schema::dropIfExists('komplemenvoucher');
    }
};
