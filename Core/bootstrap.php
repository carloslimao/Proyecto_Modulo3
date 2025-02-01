<?php

use Core\App;
use Core\Database\Conexion;
use Core\Database\GeneradorConsultas;
// control + alt + a importar todas las clases
// control + alt + i

App::set('config', require 'config.php');

$config = App::get('config');

App::set('database',  new GeneradorConsultas(
    Conexion::dbConectar($config['database'], $config['errores'])
));

ini_set('display_errors', $config['errores'] ? '1' : '0');
ini_set('display_startup_errors', $config['errores'] ? '1' : '0');
error_reporting($config['errores'] ? E_ALL : 0);
