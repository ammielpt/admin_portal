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
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
//App\User::create([
//    'name'=>'Ammiel',
//    'email'=>'ammiel16@gmail.com',
//    'password'=>bcrypt('ammiel123'),
//    'role_id'=>1
//]);

Route::get('/', function(){
    return redirect()->route('login');
});
//Noticias
Route::view('/logins', 'login')->name('login');
Route::view('/main', 'index')->name('redirect');

//Noticias
Route::get('noticias', 'NoticiasController@index')->name('noticia.index');
Route::get('noticias/crear', 'NoticiasController@create')->name('noticia.create');
Route::get('noticias/{id}/editar', 'NoticiasController@edit')->name('noticia.edit');
Route::post('noticias', 'NoticiasController@store')->name('noticia.store');
Route::put('noticias/{id}', 'NoticiasController@update')->name('noticia.update');
Route::post('noticias/{id}', 'NoticiasController@show')->name('noticia.show');
Route::delete('noticias/{id}', 'NoticiasController@destroy')->name('noticia.destroy');

//Usuarios
Route::get('usuarios', 'UsersController@index')->name('usuario.index');
Route::get('usuarios/crear', 'UsersController@create')->name('usuario.create');
Route::get('usuarios/{id}/editar', 'UsersController@edit')->name('usuario.edit');
Route::post('usuarios', 'UsersController@store')->name('usuario.store');
Route::put('usuarios/{id}', 'UsersController@update')->name('usuario.update');
Route::post('usuarios/{id}', 'UsersController@show')->name('usuario.show');
Route::delete('usuarios/{id}', 'UsersController@destroy')->name('usuario.destroy');

//Categorias
Route::get('categorias', 'CategoriasController@index')->name('categoria.index');
Route::get('categorias/crear', 'CategoriasController@create')->name('categoria.create');
Route::get('categorias/{id}/editar', 'CategoriasController@edit')->name('categoria.edit');
Route::post('categorias', 'CategoriasController@store')->name('categoria.store');
Route::put('categorias/{id}', 'CategoriasController@update')->name('categoria.update');
Route::post('categorias/{id}', 'CategoriasController@show')->name('categoria.show');
Route::delete('categorias/{id}', 'CategoriasController@destroy')->name('categoria.destroy');

//Roles
Route::get('roles', 'RolesController@index')->name('rol.index');
Route::get('roles/crear', 'RolesController@create')->name('rol.create');
Route::get('roles/{id}/editar', 'RolesController@edit')->name('rol.edit');
Route::post('roles', 'RolesController@store')->name('rol.store');
Route::put('roles/{id}', 'RolesController@update')->name('rol.update');
Route::post('roles/{id}', 'RolesController@show')->name('rol.show');
Route::delete('roles/{id}', 'RolesController@destroy')->name('rol.destroy');

//Atenticacion
Auth::routes();
Route::post('logout', function(){
    Auth::logout();
    return Redirect::to('login');
})->name('logout');
//Route::get('/home', 'HomeController@index')->name('home');
