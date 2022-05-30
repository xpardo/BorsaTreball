<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model{
        
    public function scopeName($query, $name){
        if ($name){
            return $query->where('name', 'like', "%name%");
        }
    }
    public function scopeCicle($query, $cicle){
        if ($cicle){
            return $query->where('cicle', 'like', "%cicle%");
        }
    }
    public function scopeTipus($query, $tipus){
        if ($tipus){
            return $query->where('tipus', 'like', "%tipus%");
        }
    }

    use HasFactory;

    protected $fillable = [
        'cicle' ,
        'name' ,
        'tipus' ,
        'sala' ,
        'h' ,
        'desc' ,
        'privat' ,
        'user',
        'empre',
        'inscri'
    ];
   

}