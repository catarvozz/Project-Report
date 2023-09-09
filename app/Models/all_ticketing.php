<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class all_ticketing extends Model
{
    use HasFactory;
    protected $table = 'all_ticketing';
    protected $fillable = [
        'pengunjung','harga_satuan','total_tiket','saldo_awal','total_bayar', 'tipe_pembayaran', 'kasir'];
}
