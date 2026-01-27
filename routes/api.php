<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('produto', [ProdutoController::class , 'store']);

Route::get('produto', [ProdutoController::class , 'index']);

Route::put('produto/{id}' , [ProdutoController::class , 'update']);

Route::delete('produto/{id}', [ProdutoController::class, 'delete']);

Route::post('cliente', [ClienteController::class, 'store']);

Route::get('cliente', [ClienteController::class, 'index']);

Route::post('entrada', [EntradaController::class, 'store']);

Route::get('entrada', [EntradaController::class, 'index']);

Route::delete('entrada/{id}', [EntradaController::class, 'delete']);