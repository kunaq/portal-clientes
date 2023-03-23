<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorGestionEquipo;

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
Route::view('/','login');

// Route::get('/', function () {
//     return view('login');
// });

Route::get('/info', function () {
    return view('index');
});

// Route::get('/gestion-equipos', function () {
//     return view('gestion_equipos');
// });
Route::get('/gestion-equipos',[ControladorGestionEquipo::class, 'ctrTablaGestionEquipo']);
Route::post('/detalle-equipo',[ControladorGestionEquipo::class, 'ctrDetalleGestionEquipo'])->name('detalleEquipo');
Route::post('/asignacion-equipo',[ControladorGestionEquipo::class, 'ctrAsignacionGestionEquipo'])->name('asignacionEquipo');