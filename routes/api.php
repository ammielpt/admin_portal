<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/listarusuarios', 'API\UsuariosController@index');

Route::get('/buscarusuario/{nombre}', 'API\UsuariosController@buscarUsuario');

Route::post('/crearusuario', 'API\UsuariosController@store');

Route::put('/actualizarusuario/{id}', 'API\UsuariosController@update');

//Route::put('/eliminarusuario/{id}', 'API\UsuariosController@destroy');

Route::put('/activarusuario/{id}', 'API\UsuariosController@activar');
