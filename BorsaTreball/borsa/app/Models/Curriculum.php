<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
<<<<<<< HEAD
   use HasFactory ;
   public  $table = 'curriculums';
   public $timestamps=false;
   protected $fillable= [
       'name',
       'filepath',
       'user_id',
=======

   use HasFactory;


   public $timestamps=false;
   protected $fillable= [
       'name',

       'filepath',
       'user_id',

>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d
   ];
}
