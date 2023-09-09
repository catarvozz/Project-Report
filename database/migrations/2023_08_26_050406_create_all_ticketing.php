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
        Schema::create('all_ticketing', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pengunjung', 255);
            $table->string('harga_satuan', 255);
            $table->string('total_tiket', 255);
            $table->string('saldo_awal', 255);
            $table->string('total_bayar', 255);
            $table->string('tipe_pembayaran', 255);
            $table->string('kasir', 255);
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
        Schema::dropIfExists('all_ticketing');
    }
};
