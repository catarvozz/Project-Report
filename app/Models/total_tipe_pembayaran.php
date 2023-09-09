<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class total_tipe_pembayaran extends Model
{
    use HasFactory;
    protected $table = 'total_tipe_pembayaran';
    protected $fillable = [
        'tipe_pembayaran', 'total_pendapatan'];
}
