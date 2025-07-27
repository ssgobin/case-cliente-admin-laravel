<?php
use App\Http\Controllers\ClientController;
Route::get('/', [ClientController::class, 'index']);
Route::resource('clientes', ClientController::class);
Route::get('/relatorios', [ClientController::class, 'relatorios'])->name('clientes.relatorios');

