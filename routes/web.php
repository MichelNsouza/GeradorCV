<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CurriculoController;

Route::resource('/', CurriculoController::Class);
Route::post('/store', [CurriculoController::class, 'store']);