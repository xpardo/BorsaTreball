<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'name' ,
        'cognom' ,
        'email' ,
        'empre' ,
        'telefon' ,
        'poblacio',
        'password', 
        'role_id',
    ];



     /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */


     protected $hidden = [
        'password',
        'remember_token',
    ];
 


    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */


 protected $casts = [
        'email_verified_at' => 'datetime',
    ]; 


}