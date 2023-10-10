<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setoran extends Model
{
    use HasFactory;
    protected $table = 'setoran';
    protected $fillable = [
        'uang_setoran','keterangan','jumlah','total','store'
    ];

}
