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
        Schema::create('menu_resto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_code', 255);
            $table->string('product_name', 255);
            $table->string('cost_rp', 255);
            $table->string('price_rp', 255);
            $table->string('quantity', 255);
            $table->string('subtotal_rp', 255);
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
        Schema::dropIfExists('menu_resto');
    }
};
