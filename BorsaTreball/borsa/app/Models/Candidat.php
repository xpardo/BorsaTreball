<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{

    public  $table = 'candidats';

    use HasFactory;

    protected $fillable = [
        'id_ofert',
        'empre',
        'name',
        'h',
        'user',
        'neixement' , 
        'genere' ,
        'email' ,
        'telefon' ,      
    ];




    public function candidats(){

        return $this->hasMany(candidats::class,'id_ofert','id');
    }

}
