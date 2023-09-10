<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setoran_kasir_tiket extends Model
{
    use HasFactory;
    protected $table = 'setoran_kasir_tiket';
    protected $fillable = [
        'namakasir_pc','kasir_pc1','kasir_pc2','kasir_pc3','kasir_pc4','total_uang'];
}
