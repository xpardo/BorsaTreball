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
    



    public function scopeBuscarpor($query, $tipo, $buscar) {
    	if ( ($tipo) && ($buscar) ) {
    		return $query->where($tipo,'like',"%$buscar%");
    	}
    }


    


}
