<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculumfile extends Model
{
    use HasFactory;
    protected $fillable = [
        'curri_id',
        'url',
        'name',
        'state'
    ];
}
