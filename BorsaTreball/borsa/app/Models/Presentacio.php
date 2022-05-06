<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presentacio extends Model
{
    use HasFactory;
    protected $fillable = [
        'pre_code',
        'title',
        'state',
        'id_alumn',
    ];

}
