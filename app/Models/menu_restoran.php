<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu_restoran extends Model
{
    use HasFactory;
    protected $table = 'menu_resto';
    protected $fillable = [
        'product_code','product_name','cost_rp','price_rp', 'quantity', 'subtotal_rp'
    ];
}
