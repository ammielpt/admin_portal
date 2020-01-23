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
//\App\User::create([
//    'name'=>'Ammiel'
//]);
Route::view('/logins', 'login')->name('login');
Route::view('/main', 'index')->name('redirect');
Route::view('/noticias', 'noticias.lista_noticia')->name('noticias');
Route::view('/noticias/nuevo', 'noticias.form_nuevo_noticia')->name('noticia.nuevo');
Route::view('/noticias/editar', 'noticias.form_edit_noticia')->name('noticia.editar');
Route::get('usuarios', 'UsersController@index')->name('usuarios.index');
Route::get('usuarios/{id}/editar', 'UsersController@edit')->name('usuarios.edit');
Route::put('usuarios/{id}', 'UsersController@update')->name('usuarios.update');
Route::post('usuarios/{id}', 'UsersController@store')->name('usuarios.store');
Route::post('usuarios/{id}', 'UsersController@show')->name('usuarios.show');
Route::delete('usuarios/{id}', 'UsersController@destroy')->name('usuarios.destroy');
Auth::routes();
Route::post('logout', function(){
    Auth::logout();
    return Redirect::to('login');
})->name('logout');
//Route::get('/home', 'HomeController@index')->name('home');
