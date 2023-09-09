<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class all_irdeptsum extends Model
{
    use HasFactory;
    protected $table = 'all_irdeptsum';
    protected $fillable = [
        'tipe','total'
    ];

}
