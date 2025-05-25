<?php

use Illuminate\Support\Facades\Route;

//-- Rutas de la aplicación
Route::get('/', [\App\http\Controllers\HomeController::class, 'home'])->name('home');

Route::get('/quienes-somos', [\App\http\Controllers\AboutController::class, 'about'])->name('about');

Route::get('/servicios', [\App\http\Controllers\ServicesController::class, 'services'])->name('services');

//-- Rutas de noticias

Route::get('/noticias/principales', [\App\http\Controllers\NoticiaController::class, 'index'])->name('noticias.index');
Route::get('/noticias/agregar', [\App\http\Controllers\NoticiaController::class, 'create'])->name('noticias.create')->middleware('auth');
Route::post('/noticias/agregar', [\App\http\Controllers\NoticiaController::class, 'store'])->name('noticias.store')->middleware('auth');
Route::get('/noticias/{id}', [\App\http\Controllers\NoticiaController::class, 'show'])->name('noticias.show')->whereNumber('id');
Route::get('/noticias/{id}/editar', [\App\http\Controllers\NoticiaController::class, 'edit'])->name('noticias.edit')->whereNumber('id')->middleware('auth');
Route::put('/noticias/{id}/actualizar', [\App\http\Controllers\NoticiaController::class, 'update'])->name('noticias.update')->whereNumber('id')->middleware('auth');
Route::delete('/noticias/{id}/eliminar', [\App\http\Controllers\NoticiaController::class, 'destroy'])->name('noticias.destroy')->whereNumber('id')->middleware('auth');
Route::get('/noticias/{id}/eliminar', [\App\http\Controllers\NoticiaController::class, 'delete'])->name('noticias.delete')->whereNumber('id')->middleware('auth');



Route::get('/iniciar-sesion', [\App\http\Controllers\AuthController::class, 'login'])->name('auth.login');

Route::post('/iniciar-sesion', [\App\http\Controllers\AuthController::class, 'authenticate'])->name('auth.authenticate');

Route::post('/cerrar-sesion', [\App\http\Controllers\AuthController::class, 'logout'])->name('auth.logout');
