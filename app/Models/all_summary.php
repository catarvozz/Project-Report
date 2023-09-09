<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class all_summary extends Model
{
    use HasFactory;
    protected $table = 'all_summary';
    protected $fillable = [
        'date','ticketing','restoran_fnb','retail','merchandise','persewaan_scooter','keterangan','konsinyasi_bagihasil','entertain_venue_sound','membership','pend_lain',
        'total_pendapatan','vendor_retail','vendor_merchandise','advance_deposit','total_salesreportsaloka','refund','komplemen_fnb','komplemen_fa','komplemen_hr','komplemen_ops','komplemen_ir', 'komplemen_marketing','komplemen_sales',
        'voucher_tl','bri_panorama','bca_panorama', 'bca_qq'
    ];

}
