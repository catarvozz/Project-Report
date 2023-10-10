<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setoran_kasir_tiket extends Model
{
    use HasFactory;
    protected $table = 'setoran_kasir_tiket';
    protected $fillable = [
        'kasir','nilai_uang','keterangan', 'jumlah_uang','total_uang'];
}
