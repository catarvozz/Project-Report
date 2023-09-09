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
        Schema::create('setoran_kasir_tiket', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('namakasir_pc', 255);
            $table->string('kasir_pc1', 255);
            $table->string('kasir_pc2', 255);
            $table->string('kasir_pc3', 255);
            $table->string('kasir_pc4', 255);
            $table->string('jumlah_uang', 255);
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
        Schema::dropIfExists('setoran_kasir_tiket');
    }
};
