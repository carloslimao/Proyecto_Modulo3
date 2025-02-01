<?php

namespace App\Controllers;

use Core\Auth;

class LoginController
{
    public function index()
    {
        return view('formulario-login');
    }

    public function login()
    {
        Auth::login($_POST['correo'], $_POST['password']);
        if (Auth::verificar()) {
            return redirect('/cursos/' . $_SESSION['id']);
        }

        return view('/formulario-login');
    }

    public function salir()
    {
        Auth::salir();

        return redirect('/');
    }
}
