<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    //
    public $table = "noticias";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'noticia_titulo', 'noticia_fecha_publicacion', 'noticia_imagen', 'noticia_descripcion'
    ];
}