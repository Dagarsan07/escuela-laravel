<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alumnos/listado', [AlumnoController::class, 'listado'])->name('alumnos.listado');
Route::get('/alumnos/crear', [AlumnoController::class, 'crear'])->name('alumnos.crear');
Route::get('/alumnos/guardar', [AlumnoController::class, 'guardar'])->name('alumnos.guardar');
Route::get('/alumnos/{alumno}/editar', [AlumnoController::class, 'editar'])->name('alumnos.editar');
Route::put('/alumnos/{alumno}', [AlumnoController::class, 'actualizar'])->name('alumnos.actualizar');
Route::get('/alumnos/{alumno}/confirmar', [AlumnoController::class, 'confirmar'])->name('alumnos.confirmar');
Route::delete('/alumnos/{alumno}', [AlumnoController::class, 'borrar'])->name('alumnos.borrar');
Route::get('/alumnos/{alumno}', [AlumnoController::class, 'detalle'])->name('alumnos.detalle');

Route::get('/cursos/listado', [CursoController::class, 'listado'])->name('cursos.listado');

Route::get('/cursos/{curso}', [CursoController::class, 'detalle'])->name('cursos.detalle');