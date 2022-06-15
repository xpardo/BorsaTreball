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
        'user_id',
    ];




    public function candidats(){

        return $this->hasMany(candidats::class,'id_ofert','id','user_id');
    }

}
