<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class summary_global extends Model
{
    use HasFactory;
    protected $table = 'summary_global';
    protected $fillable = [
        'tipe','cash','debittransfer','total_sumglobal'
    ];
}