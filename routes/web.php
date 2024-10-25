<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('eventos',App\Http\Controllers\EventoController::class);
Route::resource('organizadores',App\Http\Controllers\OrganizadoreController::class);
Route::resource('participaciones',App\Http\Controllers\ParticipacioneController::class);
