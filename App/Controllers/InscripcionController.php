<?php

namespace App\Controllers;

use App\Models\Inscripcion;

class InscripcionController
{
    public function crear($id, $usuario_id)
    {

        Inscripcion::insert(
            [
                'usuario_id' => $usuario_id,
                'curso_id' => $id,
            ]
        );

        return redirect('/cursos/' . $usuario_id);
    }

    /*public function actualizar($id)
    {
        $tarea = Inscripcion::find($id);
        $tarea->update(
            [
                'completado' => $_POST['completado'],
                'id' => $id
            ]
        );

        return redirect('/');
    }*/

    public function eliminar($id, $usuario_id)
    {
        $inscripcion = Inscripcion::find($id);
        $inscripcion->delete();

        return redirect('/cursos/' . $usuario_id);
    }
}
