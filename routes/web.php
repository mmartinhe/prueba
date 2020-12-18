<?php
/**Hola mario**/
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',
    [App\Http\Controllers\LoginController::class,'frmLogeo'])
    ->name('login');
Route::post('/login',
    [App\Http\Controllers\LoginController::class,'authenticate']);
Route::get('/logout',
    [App\Http\Controllers\LoginController::class,'logout']);
Route::post('/usuario/registro',[
    \App\Http\Controllers\UserController::class,'registrarUsuario']);

Route::resource('home',
    NoticiasController::class)
    ->middleware('auth');
Route::resource('noticias',
    NoticiasController::class)
    ->middleware('auth');
Route::post('noticias/subir',[App\Http\Controllers\NoticiasController::class,'subirArchivo'])
    ->middleware('auth');
Route::resource('categorias',
    CategoriasController::class)
    ->middleware('auth');


Route::get('noticias1n/{id}',
    [App\Http\Controllers\NoticiasController::class,'mostrarNoticiaCompleta']);
Route::get('categorias1n/{id}',
    [App\Http\Controllers\NoticiasController::class,'mostarCategoriasNoticia']);


