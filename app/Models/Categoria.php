<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    function productos()
    {

        //retornar los productos de la marca
        return $this -> hasMany(Producto::class);

    }
}
