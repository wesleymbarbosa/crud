<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Developer extends Model
{
    protected $fillable = [
        'nome',
        'sexo',
        'idade',
        'hobby',
        'datanascimento',
    ];
}
