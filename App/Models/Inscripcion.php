<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $tabla = 'inscripcion';

    protected $fillable = [
        'usuario_id',
        'curso_id'
    ];

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public $timestamps = false;
}
