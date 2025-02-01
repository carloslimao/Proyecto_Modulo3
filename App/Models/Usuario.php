<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $tabla = 'usuarios';

    public function cursos()
    {
        return $this->hasMany(Curso::class);
    }
}
