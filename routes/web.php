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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/inicio', function () {
    return 'Hola Mundo';
});

Route::get('usuarios', function () {
    return 'Mostrando listado de los usuarios';
});

Route::get('usuarios/{id}', function ($id) {
    return 'Mostrando detalle del usuario ' . $id;
})->where('id', '[0-9]+');

Route::get('usuarios/nuevo', function () {
    return 'Creando nuevo usuario';
});

Route::get('saludo/{name}/{nickname?}', function ($name, $nickname = null) {
    if ($nickname) {
        return 'Bienvenido ' . ucfirst($name) . '. Tu apodo es ' . $nickname;
    } else {
        return 'Bienvenido ' . ucfirst($name) . '. No tienes apodo';
    }
});
