<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class all_ticketing extends Model
{
    use HasFactory;
    protected $table = 'all_ticketing';
    protected $fillable = [
        'produk','harga_satuan','total_tiket','saldo_awal','metodepayment', 'total', 'kasir'];
}
