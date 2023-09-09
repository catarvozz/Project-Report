<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class edc_global extends Model
{
    use HasFactory;
    protected $table = 'edc_global';
    protected $fillable = [
        'bank','debit','kredit','qris'
    ];
}
