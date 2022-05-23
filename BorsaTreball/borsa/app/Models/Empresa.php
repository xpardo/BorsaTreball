<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use laravel\Fortify\TwoFactorAuthenticatable;
use laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;


class Empresa extends Model
{
    use HasApiTokens; 
    use HasFactory;

    use Notifiable;
    

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