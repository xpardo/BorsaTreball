<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{

   use HasFactory;


   public $timestamps=false;
   protected $fillable= [
       'name',

       'filepath',
       'user_id',

   ];
}
