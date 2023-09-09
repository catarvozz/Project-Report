<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class all_global extends Model
{
    use HasFactory;
    protected $table = 'all_global';
    protected $fillable = [
        'area','cash','edc','kategori','total_allglobal'
    ];
}
