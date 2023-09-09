<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class souvenir_fnb extends Model
{
    use HasFactory;
    protected $table = 'souvenirfnb';
    protected $fillable = [
        'item','kategori','harga_satuan','jumlah_penjualan','total','store', 'menu','setoran'
    ];
}
