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
<<<<<<< HEAD
        'user_id',
=======
        'user',

        'name' ,
        'empre' ,
        'neixement' , 
        'genere' ,
        'email' ,
        'telefon' ,
        


        
>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d
    ];




    public function candidats(){

<<<<<<< HEAD
        return $this->hasMany(candidats::class,'id_ofert','id','user_id');
=======
        return $this->hasMany(candidats::class,'id_ofert','id');
>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d
    }

}
