<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class komplemen_voucher extends Model
{
    use HasFactory;
    protected $table = 'komplemenvoucher';
    protected $fillable = [
        'komplemen_voucher','lokasi','vouchertl','komplemen', 'total',
    ];

}
