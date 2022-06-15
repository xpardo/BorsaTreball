<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
class Role extends Model
{
    use HasRoles; 
    use HasFactory;

    const admin = 1;
    const alumne = 2;
    const empresa  = 3;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable=[
        'name'
    ];
}
