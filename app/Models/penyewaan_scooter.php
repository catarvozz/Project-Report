<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penyewaan_scooter extends Model
{
    use HasFactory;
    protected $table = 'penyewaan';
    protected $fillable = [
        'item','harga_satuan','total_penjualan'
    ];

}
