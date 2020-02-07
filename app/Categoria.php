<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    protected $fillable=['categoria_nombre', 'categoria_descripcion', 'categoria_activo'];
}
