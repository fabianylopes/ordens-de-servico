<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdemDeServicoController;

Route::get('/', [OrdemDeServicoController::class, 'index']);
Route::get('/service/create', [OrdemDeServicoController::class, 'create']);
Route::post('/service/create', [OrdemDeServicoController::class, 'store']);
Route::get('/service/show', [OrdemDeServicoController::class, 'show']);
Route::get('/service/dashboard', [OrdemDeServicoController::class, 'dashboard']);
Route::get('/service/edit/{id}', [OrdemDeServicoController::class, 'edit']);
Route::put('/service/update/{id}', [OrdemDeServicoController::class, 'update']);
Route::get('/service/delete/{id}', [OrdemDeServicoController::class, 'destroy']);
