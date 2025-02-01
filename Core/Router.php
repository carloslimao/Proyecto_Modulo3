<?php

namespace Core;

class Router
{
    protected $rutas = [];

    public function registrar($rutas)
    {
        $this->rutas = $rutas;
    }

    public function manejar($url)
    {
        if (array_key_exists($url, $this->rutas)) {
            $clase =  $this->rutas[$url][0];
            $metodo =  $this->rutas[$url][1];

            $clase = "App\\Controllers\\{$clase}";

            if (!class_exists($clase)) {
                throw new \Exception("El controlador {$clase} no existe");
            }

            if (!method_exists($clase, $metodo)) {
                throw new \Exception("El método {$metodo} no existe dentro de la clase {$clase}.");
            }

            return (new $clase)->$metodo();
        }

        throw new \Exception("No se encontro la ruta");
    }
}
