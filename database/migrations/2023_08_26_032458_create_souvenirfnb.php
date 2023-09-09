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
        Schema::create('souvenirfnb', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('item', 255);
            $table->string('kategori', 255);
            $table->string('harga_satuan', 255);
            $table->string('jumlah_penjualan', 255);
            $table->string('total', 255);
            $table->string('store', 255);
            $table->string('menu', 255);
            $table->string('setoran', 255);
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
        Schema::dropIfExists('souvenirfnb');
    }
};
