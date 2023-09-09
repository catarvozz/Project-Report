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
        Schema::create('total_tipe_pembayaran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipe pembayaran', 255);
            $table->string('total_pendapatan', 255);
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
        Schema::dropIfExists('total_tipe_pembayaran');
    }
};
