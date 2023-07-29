<?php

use App\Http\Controllers\BienController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\OrdenController;
use App\Http\Controllers\SalidaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', function () {
    return view('admin');
});
/* Route::get('/admin/bienes',function(){
    return view('layouts.bienes');
}); */
Route::get('/admin/bienes', [BienController::class, 'index']);
Route::get('/admin/solicitudes', [SolicitudController::class, 'index']);
Route::get('/admin/ordenes', [OrdenController::class, 'index']);
Route::get('/admin/salidas', [SalidaController::class, 'index']);

/* Route::get('/admin/bienes/create',function(){
    return view('layouts.create_bienes');
}); */
/* Route::put('/admin/bienes/create',[BienController::class,'store'])->name('crearBien'); */
Route::get('/admin/bienes/create',[BienController::class,'store'])->name('crearBien');
Route::get('/admin/solicitudes/create', [SolicitudController::class, 'store'])->name('crearSolicitud');
Route::get('/admin/ordenes/create', [OrdenController::class, 'store'])->name('crearOrden');
Route::get('/admin/salidas/create', [SalidaController::class, 'store'])->name('crearSalida');
