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

Route::view('/login', 'login');
Route::view('/main', 'index')->name('redirect');
Route::view('/noticias', 'noticias.lista_noticia')->name('noticias');
Route::view('/noticias/nuevo', 'noticias.form_nuevo_noticia')->name('noticia.nuevo');
Route::view('/noticias/editar', 'noticias.form_edit_noticia')->name('noticia.editar');