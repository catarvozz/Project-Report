<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class total_uang_allsummary extends Model
{
    use HasFactory;
    protected $table = 'total_uang_allsummary';
    protected $fillable = [
        'kategori','total_uang'];
}
