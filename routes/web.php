<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'inicioController@inicio');
Route::get('/inicio', 'inicioController@inicio');
Route::get('/alumnos', 'alumnosController@inicio');
Route::get('asignaturas/', 'asignaturasController@inicio');
Route::get('/calendarios', 'calendariosController@inicio');
Route::get('/cursos', 'cursosController@inicio');
Route::get('/editar', 'editarController@inicio');
Route::get('/encuentas', 'encuentasController@inicio');
Route::get('/evolucion', 'evolucionController@inicio');
Route::get('/examenes', 'examenesController@inicio');
Route::get('/foro', 'foroController@inicio');
Route::get('/informes', 'informesController@inicio');
Route::get('/login', 'loginController@inicio');
Route::get('/mi-cuenta', 'mi-cuentaController@inicio');
Route::get('/nota-legal', 'nota-legalController@inicio');
Route::get('/nuevo', 'nuevoController@inicio');
Route::get('/ordenar', 'ordenarController@inicio');
Route::get('/otros-documentos', 'otros-documentosController@inicio');
Route::get('/otros-profesores', 'otros-profesoresController@inicio');
Route::get('/politica-de-privacidad', 'politica-de-privacidadController@inicio');
Route::get('/registro', 'registroController@inicio');
Route::get('/videoclases', 'videoclasesregistroController@inicio');


