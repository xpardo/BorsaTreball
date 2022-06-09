<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presentacio extends Model
{
    //use HasFactory;

    use HasFactory;

   public $timestamps=false;
   protected $fillable= [
       'name',
       'filepath',
       'user_id',
   ];

<<<<<<< HEAD
=======

>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d
}
