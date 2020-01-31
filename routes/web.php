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

//Noticias
Route::view('/logins', 'login')->name('login');
Route::view('/main', 'index')->name('redirect');
Route::view('/noticias', 'noticias.lista_noticia')->name('noticias');
Route::view('/noticias/nuevo', 'noticias.form_nuevo_noticia')->name('noticia.nuevo');
Route::view('/noticias/editar', 'noticias.form_edit_noticia')->name('noticia.editar');

//Usuarios
Route::get('usuarios', 'UsersController@index')->name('usuarios.index');
Route::get('usuarios/{id}/editar', 'UsersController@edit')->name('usuarios.edit');
Route::put('usuarios/{id}', 'UsersController@update')->name('usuarios.update');
Route::post('usuarios/{id}', 'UsersController@store')->name('usuarios.store');
Route::post('usuarios/{id}', 'UsersController@show')->name('usuarios.show');
Route::delete('usuarios/{id}', 'UsersController@destroy')->name('usuarios.destroy');

//Roles
Route::get('roles', 'RolesController@index')->name('roles.index');
Route::get('roles/crear', 'RolesController@create')->name('roles.create');
Route::get('roles/{id}/editar', 'RolesController@edit')->name('roles.edit');
Route::put('roles/{id}', 'RolesController@update')->name('roles.update');
Route::post('roles/{id}', 'RolesController@store')->name('roles.store');
Route::post('roles/{id}', 'RolesController@show')->name('roles.show');
Route::delete('roles/{id}', 'RolesController@destroy')->name('roles.destroy');

//Atenticacion
Auth::routes();
Route::post('logout', function(){
    Auth::logout();
    return Redirect::to('login');
})->name('logout');
//Route::get('/home', 'HomeController@index')->name('home');
