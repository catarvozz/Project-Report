<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class summary_ticketing extends Model
{
    use HasFactory;
    protected $table = 'summary_ticketing';
    protected $fillable = [
        'tanggal','group','group_web','individu_terusan', 'individu_ota', 'total_bayar', 'total_komplimen', 'total'
    ];
}
