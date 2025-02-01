<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $tabla = 'cursos';

    protected $fillable = [
        'nombre',
        'descripcion',
        'docente'
    ];

    public function usuarios()
    {
        return $this->hasMany(Usuario::class);
    }

    public $timestamps = false;
}
