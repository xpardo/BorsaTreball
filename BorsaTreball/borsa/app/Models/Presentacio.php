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

}
