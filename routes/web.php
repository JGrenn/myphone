<?php

use App\Http\Controllers\ControllerMP;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/Smartphones/ver{Modelo}',[ControllerMP::class,'viewsp']);
Route::middleware(['auth:sanctum', 'verified'])->get('/',[ControllerMP::class,'welcome']);
Route::middleware(['auth:sanctum', 'verified'])->get('/Smartphones',[ControllerMP::class,'versp']);
Route::middleware(['auth:sanctum', 'verified'])->get('/Smartphones/buscar',[ControllerMP::class,'buscarsp'])->name('BuscarSP');
Route::middleware(['auth:sanctum', 'verified'])->get('/Smartphones/crear',[ControllerMP::class,'crearsp']);
Route::post('/Smartphones/insertar',[ControllerMP::class,'insertarsp'])->name('InsertarPhone');
Route::middleware(['auth:sanctum', 'verified'])->get('/Smartphones/editar/{Modelo}',[ControllerMP::class,'editarsp']);
Route::middleware(['auth:sanctum', 'verified'])->post('/Smartphones/actualizar',[ControllerMP::class,'actualizarsp'])->name('ActualizarPhone');
Route::middleware(['auth:sanctum', 'verified'])->get('/Smartphones/borrar/{Modelo}',[ControllerMP::class,'borrarsp']);
Route::middleware(['auth:sanctum', 'verified'])->get('/Noticias',[ControllerMP::class,'vernot']);
Route::middleware(['auth:sanctum', 'verified'])->get('/Noticia/ver{ID_NO}',[ControllerMP::class,'viewnews']);
Route::middleware(['auth:sanctum', 'verified'])->get('/Noticias/crear',[ControllerMP::class,'crearnot']);
Route::post('/Noticia/insertar',[ControllerMP::class,'insertarnot'])->name('InsertarNoticia');
Route::middleware(['auth:sanctum', 'verified'])->get('/Noticia/reportar/{ID_NO}',[ControllerMP::class,'reportarnot']);
Route::post('/Noticia/insertar/reporte',[ControllerMP::class,'insertarrep'])->name('Reportarnoticia');