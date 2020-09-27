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
// estas rutas se pueden acceder sin proveer de un token válido.
Route::post('/login', 'API\AuthController@login');
Route::post('/register', 'API\AuthController@register');

Route::post('/recuperar', 'API\AuthController@getAuthUser');
// estas rutas requiren de un token válido para poder accederse.
Route::post('/logout', 'API\AuthController@logout');

/*Route::group(['middleware' => 'auth.jwt'], function () {
Route::post('/logout', 'API\AuthController@logout');
});*/

Route::get('/listarusuarios', 'API\UsuariosController@index');

Route::get('/buscarusuario/{nombre}', 'API\UsuariosController@buscarUsuario');

Route::post('/crearusuario', 'API\UsuariosController@store');

Route::put('/actualizarusuario/{id}', 'API\UsuariosController@update');

//Route::put('/eliminarusuario/{id}', 'API\UsuariosController@destroy');

Route::put('/activarusuario/{id}', 'API\UsuariosController@activar');
