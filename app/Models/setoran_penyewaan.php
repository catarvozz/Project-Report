<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setoran_penyewaan extends Model
{
    use HasFactory;
    protected $table = 'setoran_penyewaan';
    protected $fillable = [
        'nilai_uang','jumlah','keterangan','total'
    ];
}
