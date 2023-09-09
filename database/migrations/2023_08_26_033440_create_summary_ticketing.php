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
        Schema::create('summary_ticketing', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tanggal', 255);
            $table->string('group', 255);
            $table->string('group_web', 255);
            $table->string('individu_terusan', 255);
            $table->string('individu_ota', 255);
            $table->string('total_bayar', 255);
            $table->string('total_komplimen', 255);
            $table->string('total', 255);
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
        Schema::dropIfExists('summary_ticketing');
    }
};
