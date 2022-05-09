<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presentacio extends Model
{
    //use HasFactory;

    protected $table = 'presentacions';
    protected $primaryKey= 'id_doc';

    public $timestamps=false;
    protected $fillable= [
        'name',
        'pdf',
        'id_alumne',
    ];

}
