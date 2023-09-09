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
        Schema::create('all_summary', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('date', 255);
            $table->string('ticketing', 255);
            $table->string('restoran_fnb', 255);
            $table->string('retail', 255);
            $table->string('merchandise', 255);
            $table->string('persewaan_scooter', 255);
            $table->string('konsinyasi_bagihasil', 255);
            $table->string('entertain_venue_sound', 255);
            $table->string('membership', 255);
            $table->string('pend_lain', 255);
            $table->string('total_pendapatan', 255);
            $table->string('vendor_retail', 255);
            $table->string('vendor_merchandise', 255);
            $table->string('advance_deposit', 255);
            $table->string('total_salesreportsaloka', 255);
            $table->string('refund', 255);
            $table->string('komplemen_fnb', 255);
            $table->string('komplemen_fa', 255);
            $table->string('komplemen_hr', 255);
            $table->string('komplemen_ops', 255);
            $table->string('komplemen_ir', 255);
            $table->string('komplemen_marketing', 255);
            $table->string('komplemen_sales', 255);
            $table->string('voucher_tl', 255);
            $table->string('bri_panorama', 255);
            $table->string('bca_panorama', 255);
            $table->string('bca_qq', 255);
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
        Schema::dropIfExists('all_summary');
    }
};
