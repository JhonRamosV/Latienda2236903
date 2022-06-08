<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public function marca(){
        //belongs: relacion m -1
        return $this -> belongsTo(Marca::class);
    }

    public function categoria(){
        //belongs: relacion m -1
        return $this -> belongsTo(Categoria::class);
    }
}
