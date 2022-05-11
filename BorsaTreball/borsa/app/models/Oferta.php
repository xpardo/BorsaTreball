<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    use HasFactory;

    protected $fillable = [
        'cicle' ,
        'name' ,
        'tipus' ,
        'sala' ,
        'h' ,
        'desc' ,
        'privat' ,
    ];
}
