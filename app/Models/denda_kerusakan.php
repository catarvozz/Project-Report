<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class denda_kerusakan extends Model
{
    use HasFactory;
    protected $table = 'denda_penyewaan';
    protected $fillable = [
        'denda_kerusakan','charge_kunci_hilang'
    ];
}
