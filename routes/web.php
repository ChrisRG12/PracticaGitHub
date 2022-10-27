<?php

use Illuminate\Support\Facades\Route;

//Importamos el controlador
use App\Http\Controllers\controladorUsu;



/* Creamos las rutas del archivo web que spon las que se van a dirigir a las funciones del controlador */
Route::get('welcome', [controladorUsu::class, 'showWelcome']) -> name('ApoWe');

Route::get('inicio', [controladorUsu::class, 'showinicio']) -> name('ApoIn');


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
/* 
Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('inicio');
});
 */
