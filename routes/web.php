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

/*Route::get('/', function () {
    return view('welcome');
});*/



Route::get('/', 'Cursos@index');
Route::get('/cursos', 'Cursos@index');
Route::get('/modulo_cursos', 'Cursos@create');

Route::post('/modulo_cursos/save', 'Cursos@store');

Route::post('/contact_send', 'Cursos@contactUSPost');


Route::get('/consulta_curso', 'Cpanel@moduloCpanelCurso');
Route::get('/consulta_clase', 'Cpanel@moduloCpanelClase');

Route::get('/consulta_alumno', 'Cpanel@moduloCpanelAlumno');


Route::get('/consulta_alumno_curso', 'Cpanel@moduloCpanelAlumnoxCurso');

Route::get('/consulta_seccion', 'Cpanel@moduloCpanelSeccion');


Route::get('/consulta_usuario', 'Cpanel@consulta_usuario');

Route::post('/modulo_clases/save', 'Clases@store');

Route::post('/detalleCurso/pagoTarjeta', 'Cursos@pagoTarjeta');



Route::get('/detalleCurso/{id}', 'Cursos@DetalleCurso');
Route::get('/detalle-curso-reproducir/{curso}{seccion}{id}','Cursos@MultimediaCurso');
Route::get('/mis-cursos','Cursos@MisCursos');
Auth::routes();

Route::get('/home', 'Cursos@index');
Route::get('/profile', 'HomeController@profile');

Route::get('/panel-ilumina', 'Cpanel@index');

Route::get('email', 'Cursos@email');
Route::get('email_contacto', 'Cursos@contactUS');

//Route::get('email_todo_contacto', 'Cursos@sendAllEmail');


Route::get('email_registro', 'Cursos@email_registro');


Route::get('/nosotros', 'Cursos@nosotros');

Route::get('/contacto', 'Cursos@contacto');

Route::get('/portafolio', 'Cursos@portfolio');

Route::get('/banner-modulo-acceso-publicidad', 'Cursos@banner');

Route::post('/bannerMuestra', 'Cursos@bannerMuestra');


Route::get('/pack-presencial', 'Cursos@pack');

Route::get('/3d-printing', 'Cursos@printing');


//edicion Seccion
Route::get('/editar_seccion{id}', 'Cpanel@editar_seccion');




//Forget
Auth::routes();