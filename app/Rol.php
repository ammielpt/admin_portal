<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    public $table = "roles";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rol_name', 'rol_key_name', 'rol_description'
    ];

    public function usuarios(){
        return $this->belongsToMany(User::class, 'usuario_rol', 'id_rol', 'id_usuario');
    }
}
