<?php

use App\Controllers\HomeController;
use App\Controllers\LoginController;
use Pecee\SimpleRouter\SimpleRouter;
use App\Controllers\PaginaController;
use App\Controllers\InscripcionController;

SimpleRouter::get('/', [LoginController::class, 'index']);
SimpleRouter::get('cursos/{id}', [HomeController::class, 'index']);
SimpleRouter::post('inscripcion/crear/{id}/{usuario_id}', [InscripcionController::class, 'crear']);
SimpleRouter::post('inscripcion/eliminar/{id}/{usuario_id}', [InscripcionController::class, 'eliminar']);
SimpleRouter::get('login', [LoginController::class, 'index']);
SimpleRouter::post('login', [LoginController::class, 'login']);
SimpleRouter::post('cerrar-sesion', [LoginController::class, 'salir']);

SimpleRouter::start();
