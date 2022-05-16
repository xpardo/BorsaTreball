<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recomanacio extends Model
{
   //use HasFactory;

   protected $table = 'recomenacio';
   protected $primaryKey= 'id_doc';

   public $timestamps=false;
   protected $fillable= [
       'name',
       'pdf',
       'user',
   ];
}
