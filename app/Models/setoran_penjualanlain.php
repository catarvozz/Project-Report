<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setoran_penjualanlain extends Model
{
    use HasFactory;
    protected $table = 'setoran_penjualanlain';
    protected $fillable = [
        'nilai_uang','jumlah','keterangan','total'
    ];
}
