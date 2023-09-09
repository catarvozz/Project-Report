<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class create_nilaiuang extends Model
{
    use HasFactory;
    protected $table = 'create_nilaiuang';
    protected $fillable = [
        'nilai_uang'
    ];
}
