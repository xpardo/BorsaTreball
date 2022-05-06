<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presentaciofile extends Model
{
    use HasFactory;
    protected $fillable = [
        'pre_id',
        'url',
        'name',
        'state'
    ];
}
