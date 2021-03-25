<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ley extends Model
{
    protected $fillable = ['nombre', 'categoria', 'ruta'];
}
