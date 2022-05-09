<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    //use HasFactory;

    protected $table = 'curriculums';
    protected $primaryKey= 'id_doc';

    public $timestamps=false;
    protected $fillable= [
        'name',
        'pdf',
        'id_alumne',
    ];
}
