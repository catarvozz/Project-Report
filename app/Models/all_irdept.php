<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class all_irdept extends Model
{
    use HasFactory;
    protected $table = 'all_irdept';
    protected $fillable = [
        'area','cash','edc','total'
    ];

}
