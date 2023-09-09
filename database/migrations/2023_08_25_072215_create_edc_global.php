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
        Schema::create('edc_global', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bank', 255);
            $table->string('debit', 255);
            $table->string('kredit', 255);
            $table->string('qris', 255);
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
        Schema::dropIfExists('edc_global');
    }
};
