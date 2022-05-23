<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    use HasFactory;

    protected $table = 'ofertas';

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
    
  /*   public function scopeBuscarpor($query, $name){
        if ($name){
            return $query->where('$name', 'like', "%$name%");
        }
    }
    public function scopeBuscarporcicle($query, $cicle, $buscar){
        if ( ($cicle) && ($buscar) ){
            return $query->where('$cicle', 'like', "%$cicle%");
        }
    }
    public function scopeBuscarportipus($query, $tipus, $buscar){
        if (($tipus) && ($buscar) ) {
            return $query->where('$tipus', 'like', "%$tipus%");
        }
    } */

    public function scopeBuscarpor($query, $tipo, $buscar) {
    	if ( ($tipo) && ($buscar) ) {
    		return $query->where($tipo,'like',"%$buscar%");
    	}
    }


    

}