<?php
namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class Alumne extends Model
{
    use  HasFactory, Notifiable;
    protected $fillable = [
        'name' ,
        'cognom' ,
        'neixement' ,
        'genere',
        'cp' ,
        'email' ,
        'password', 
        'telefon',
        'poblacio',
        'estat',
        'fet',
        'treballat',
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
