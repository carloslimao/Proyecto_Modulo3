<?php

namespace App\Controllers;

use App\Models\Curso;
use App\Models\Inscripcion;


class HomeController
{

    public function index($id)
    {
        $cursos = Curso::all();
        $cursosInscritos = Inscripcion::where('usuario_id', $id)->with('curso')->get();

        return view('index', [
            'cursos' => $cursos,
            'cursosInscritos' => $cursosInscritos
        ]);
    }
}
