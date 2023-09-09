<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjualan_lain extends Model
{
    use HasFactory;
    protected $table = 'penjualan_lain';
    protected $fillable = [
        'item','harga_satuan','total_penjualan'
    ];
}
