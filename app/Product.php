<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    // Atributos que pueden ser asignados en la base de datos
    
    protected $fillable = [
        'name', 'price', 'stock',
    ];
}
